<?php

namespace App\Http\Controllers;

use App\Events\Booking as EventBooking;
use App\Models\Redirect;
use App\Repositories\Eloquent\BookingRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    protected $model_tag;
    protected $model_post;

    public function __construct(
        public BookingRepository $bookingRepository,
    ) {}

    public function dashboard(Request $request)
    {
        return view('front_end.home', []);
    }
    public function page(Request $request)
    {
        return view('front_end.page', []);
    }
    public function khuyenMai(Request $request)
    {
        return view('front_end.khuyen_mai', []);
    }

    public function booking(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'form_type' => 'required',
        ]);
        $input = $request->only(['name', 'phone', 'form_type', 'address', 'note', 'count_combo']);
        try {
            $booking =  $this->bookingRepository->create($input);
            switch ($input['form_type']) {
                case "form_1":
                    $receiverEmail = env("EMAIL_RECEIVER_1",  config('data.email_receiver_1'));
                    break;
                case "form_2":
                    $receiverEmail = env("EMAIL_RECEIVER_2",  config('data.email_receiver_1'));
                    break;
                case "form_3":
                    $receiverEmail = env("EMAIL_RECEIVER_3",  config('data.email_receiver_1'));
                    break;
            }
            Mail::to($receiverEmail)->send(new \App\Mail\SendEmailBooking($booking));
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $ex) {
            return response()->json(['status' => 'error'], 500);
        }
    }

    public function redirect(Request $request)
    {
        return abort(404);
    }

    public function redirect301(Request $request, $slug)
    {
        $url = $request->url();
        $url = str_replace('http://', 'https://', $url);
        $link = Redirect::where('url_old', $url)->where('is_status', 1)->first();
        if (!empty($link)) {
            return redirect($link->url_new, 301);
        }
        return abort(404);;
    }
    private function redirectUrl($link, $request)
    {
        if (!empty($link->type)) {
            switch ($link->type) {
                // case 'category':
                //     return $this->category($request, $link->slug, $link->key_id);
                //     break;
                // case 'post':
                //     return $this->post($request, $link->slug);
                //     break;
                // case 'page':
                //     return $this->page($request, $link->slug);
                //     break;
                default:
                    return abort(404);
                    break;
            }
        }

        return abort(404);
    }
}
