<html>
    <body>
        <h2>New Service Request</h2>
            <p>Dear {{$user->name}}, </p>
            <p>Your Order has been placed successfully</p>
            <table style="table-layout:fixed;margin:0 auto;text-align:right;" border="1" cellspacing="0" cellpadding="8">
                <thead style="background: lightgray">
                  <tr>
                    <th bgcolor="#0092ff" colspan="4" >ORDER</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th colspan="3" style="text-align: left;">Invoice #800{{$user->id}}</th> 
                    <th >Date: {{$user->created_at}} </tr>
                  </tr>
                  <tr> 
                    <td colspan="3" style="text-align: left;"> 
                      <?php $pro = explode(',',$user->products);?>
                      @if($user->idService == 1)
                        @foreach($pro as $p)
                        @if($p == 1001)<strong>Logo Design </strong><br> @endif
                        @if($p == 1002)<strong>Motion Intro </strong><br> @endif
                        @if($p == 1003)<strong>Business Cards Design </strong> <br>@endif
                        @if($p == '1004')<strong>Social Media Covers </strong><br>@endif
                        @if($p == '1005')<strong>3 Merch Mockups </strong><br>@endif
                        @endforeach
                      @elseif($user->idService == 2)
                        @foreach($pro as $p)
                        @if($p == 1001)<strong>Front  Cover </strong><br>@endif
                        @if($p == 1002)<strong>Back  Cover </strong><br> @endif
                        @if($p == 1000)<strong>Motion Cover </strong><br>@endif
                        @endforeach
                      @elseif($user->idService == 3)
                        @foreach($pro as $p)
                        @if($p == 1001)<strong>Back Cover Art</strong> <br>@endif
                        @if($p == 1000)<strong>Motion + Cover Art </strong> <br>@endif
                        @endforeach
                      @elseif($user->idService == 4)
                        @foreach($pro as $p)
                        @if($p == 1000)<strong>Flyer Design</strong><br> @endif
                        @if($p == 1001)<strong>Motion Flyer </strong><br>@endif
                        @endforeach
                      
                      @endif
                    </td> 
                    <td > <strong>${{$user->payment}}</strong></td> 
                  </tr>                    
                </tbody>
                <tfoot> 
                  <tr> 
                    <th colspan="3" >Subtotal</th> 
                    <td ><strong> ${{$user->payment}}</strong></td> 
                  </tr> 
                  <tr> 
                    <th colspan="2" >Tax</th> 
                    <td> % </td> 
                    <td ><strong>0</strong></td> 
                  </tr> 
                  <tr> 
                    <th colspan="3" >Grand Total</th> 
                    <td ><strong>${{$user->payment}}</strong></td> 
                  </tr> 
                </tfoot>
                <tr>
                    <th width="200" style="visibility: hidden;"></th>
                    <th width="100" style="visibility: hidden;"></th>
                    <th width="100" style="visibility: hidden;"></th>
                    <th width="200" style="visibility: hidden;"></th>
                  </tr>
        </table>
    </body>
</html>