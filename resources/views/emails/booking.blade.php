 <html>

 <head>
     <META http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>

 <body> 
     <h3 style="text-align: center;">
          {{$form_type == "form_1" ? "COMBO 2.370.000 VNĐ" : "Ưu đãi đặc biệt - 6 CHAI RƯỢU VANG ELLETRA PRIMITIVO"}}
     </h3>
     <table align="center" cellspacing="0" cellpadding="6" width="100%"
         style="max-width:100%;background:#e9e9e9;padding:50px 0px,border:0;color:#000000;line-height:150%;text-align:left;font:300 14px/30px &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;"
         border=".5px">
         <tr width="100%">
             <th width="30%"
                 style="text-align:left;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0;word-wrap:break-word">
                 Tên Khách Hàng
             </th>
             <td width="70%"
                 style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0">
                 {{ $customerName ?? '' }}
             </td>
         </tr>

         <tr width="100%">
             <th width="30%"
                 style="text-align:left;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0;word-wrap:break-word">
                 Số điện thoại
             </th>
             <td width="70%"
                 style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0">
                 {{ $phone ?? '' }}
             </td>
         </tr>
         <tr width="100%">
             <th width="30%"
                 style="text-align:left;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0;word-wrap:break-word">
                 Địa chỉ nhận hàng
             </th>
             <td width="70%"
                 style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0">
                 {{ $address ?? '' }}
             </td>
         </tr>

         <tr width="100%">
             <th width="30%"
                 style="text-align:left;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0;word-wrap:break-word">
                 Số lượng combo
             </th>
             <td width="70%"
                 style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0">
                 {{ $count_combo ?? '' }}
             </td>
         </tr>
         <tr width="100%">
             <th width="30%"
                 style="text-align:left;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0;word-wrap:break-word">
                 Ghi chú
             </th>
             <td width="70%"
                 style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0">
                 {{ $note }}
             </td>
         </tr>
     </table>

 </body>

 </html>
