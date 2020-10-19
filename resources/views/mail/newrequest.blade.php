<html>
    <body>
        <?php $service = \App\Service::where('idService','=',$user->idService)->first(); ?>
        
            <h2>New Service Request</h2>
            <p>Dear Admin, </p>
            <p>New {!! $service->serviceName !!} Request</p>
            <table style="table-layout:fixed;margin:0 auto;" border="1" cellspacing="0" cellpadding="8" bordercolor="#ededed">
                <thead style="background: lightgray">
                    <tr>
                    <th bgcolor="#0092ff" colspan="2">ORDER DETAILS</th>
                  </tr>
                    <tr>
                        <th width="300" bgcolor="#ededed">#Item</th>
                        <th width="500" bgcolor="#ededed">Description</th>
                    </tr>
                </thead>
                @if($user->idService == 1)
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{!! $user->name !!}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{!! $user->email !!}</td>
                    </tr>
                    <tr>
                        <td>Service</td>
                        <td>{!! $service->serviceName !!} </td>
                    </tr>
                    <tr>
                        <td>Company/Brand Title</td>
                        <td>{!! $user->companyTitle !!}</td>
                    </tr>
                    <tr>
                        <td>Company Slogan</td>
                        <td>{!! $user->slogan !!} </td>
                    </tr>
                    <tr>
                        <td>Company Description</td>
                        <td>{!! $user->companyDescription !!}</td>
                    </tr>
                    <tr>
                        <td>Logo Description</td>
                        <td>{!! $user->logoDiscription !!} </td>
                    </tr>
                    <tr>
                        <td>Look & Feel of Logo</td>
                        <td>{!! $user->logoLook !!}</td>
                    </tr>
                    <tr>
                        <td>Target Audience</td>
                        <td>{!! $user->audience !!} </td>
                    </tr>
                    <tr>
                        <td>Competitor</td>
                        <td>{!! $user->competitor !!} </td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>{!! $user->instagram !!}</td>
                    </tr>
                    @if($user->primaryColor)
                    <tr>
                        <td>Design Primary Color</td>
                        <td>{!! $user->primaryColor !!} </td>
                    </tr>
                    @endif
                    @if($user->secondaryColor)
                    <tr>
                        <td>Design Secondary Color</td>
                        <td>{!! $user->secondaryColor !!}</td>
                    </tr>
                    @endif
                    @if($user->background)
                    <tr>
                        <td>Design Background</td>
                        <td>{!! $user->background !!} </td>
                    </tr>
                    @endif
                    @if($user->logoExample)
                    <tr>
                        <td>Logo Sample</td>
                        <td>Find Attachment</td>
                    </tr>
                    @endif
                    @if($user->cashapp)
                    <tr>
                        <td>CashApp Screenshot</td>
                        <td>Find Attachment</td>
                    </tr>
                    @endif
                    <tr>
                        <td><b>Total Paid Amount</b></td>
                        <td><b>${!!$user->payment!!} </b></td>
                    </tr>
                </tbody>
            
                @elseif($user->idService == 2)
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{!! $user->name !!}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{!! $user->email !!}</td>
                    </tr>
                    <tr>
                        <td>Service</td>
                        <td>{!! $service->serviceName !!} </td>
                    </tr>
                    <tr>
                        <td>Cover Title</td>
                        <td>{!! $user->companyTitle !!}</td>
                    </tr>
                    <tr>
                        <td>Artist Name</td>
                        <td>{!! $user->slogan !!} </td>
                    </tr>
                    <tr>
                        <td>Ideas & Requirement</td>
                        <td>{!! $user->companyDescription !!}</td>
                    </tr>
                    <tr>
                        <td>Producer Name </td>
                        <td>{!! $user->logoDiscription !!} </td>
                    </tr>
                    <tr>
                        <td>Parental Advisory</td>
                        <td>{!! $user->logoLook !!}</td>
                    </tr>
                    <tr>
                        <td>Is Track list Ready</td>
                        <td>{!! $user->audience !!} </td>
                    </tr>
                    <tr>
                        <td>Track List</td>
                        <td>{!! $user->competitor !!} </td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>{!! $user->instagram !!}</td>
                    </tr>
                    @if($user->logoExample)
                    <tr>
                        <td>Logo Sample</td>
                        <td>Find Attachment</td>
                    </tr>
                    @endif
                    @if($user->cashapp)
                    <tr>
                        <td>CashApp Screenshot</td>
                        <td>Find Attachment</td>
                    </tr>
                    @endif
                    <tr>
                        <td><b>Total Paid Amount</b></td>
                        <td><b>${!!$user->payment!!} </b></td>
                    </tr>
                </tbody>
            
                @elseif($user->idService == 3)
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{!! $user->name !!}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{!! $user->email !!}</td>
                    </tr>
                    <tr>
                        <td>Service</td>
                        <td>{!! $service->serviceName !!} </td>
                    </tr>
                    <tr>
                        <td>Cover Title</td>
                        <td>{!! $user->companyTitle !!}</td>
                    </tr>
                    <tr>
                        <td>Artist Name</td>
                        <td>{!! $user->name !!} </td>
                    </tr>
                    <tr>
                        <td>Producer Name</td>
                        <td>{!! $user->slogan !!} </td>
                    </tr>
                    <tr>
                        <td>Ideas & Requirement</td>
                        <td>{!! $user->companyDescription !!}</td>
                    </tr>
                    <tr>
                        <td>Is Track list Ready</td>
                        <td>{!! $user->audience !!} </td>
                    </tr>
                    <tr>
                        <td>Track List</td>
                        <td>{!! $user->competitor !!} </td>
                    </tr>
                    <tr>
                        <td>Parental Advisory</td>
                        <td>{!! $user->logoLook !!} </td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>{!! $user->instagram !!}</td>
                    </tr>
                    @if($user->logoExample)
                    <tr>
                        <td>Logo Sample</td>
                        <td>Find Attachment</td>
                    </tr>
                    @endif
                    @if($user->cashapp)
                    <tr>
                        <td>CashApp Screenshot</td>
                        <td>Find Attachment</td>
                    </tr>
                    @endif
                    <tr>
                        <td><b>Total Paid Amount</b></td>
                        <td><b>${!!$user->payment!!} </b></td>
                    </tr>
                </tbody>        
                @elseif($user->idService == 4)
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{!! $user->name !!}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{!! $user->email !!}</td>
                    </tr>
                    <tr>
                        <td>Service</td>
                        <td>{!! $service->serviceName !!} </td>
                    </tr>
                    <tr>
                        <td>Flyer Main Title</td>
                        <td>{!! $user->companyTitle !!}</td>
                    </tr>
                    <tr>
                        <td>Ideas & Requirement</td>
                        <td>{!! $user->companyDescription !!}</td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>{!! $user->instagram !!}</td>
                    </tr>
                    @if($user->logoExample)
                    <tr>
                        <td>Logo Sample</td>
                        <td>Find Attachment</td>
                    </tr>
                    @endif
                    @if($user->cashapp)
                    <tr>
                        <td>CashApp Screenshot</td>
                        <td>Find Attachment</td>
                    </tr>
                    @endif
                    <tr>
                        <td><b>Total Paid Amount</b></td>
                        <td><b>${!!$user->payment!!} </b></td>
                    </tr>
                </tbody>
                @endif 
            </table>
        <br><br>
        Invoice :

        <table style="table-layout:fixed;margin:0 auto;text-align:right;" border="1" cellspacing="0" cellpadding="8">
                <thead style="background: lightgray">
                  <tr>
                    <th bgcolor="#0092ff" colspan="4" >ORDER</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th colspan="3" style="text-align: left;">Invoice #800{!!$user->id!!}</th> 
                    <th >Date: {!!$user->created_at!!} </th>
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
                      <td > ${!!$user->payment!!}</td> 
                    </tr>
                    
                </tbody>
                <tfoot> 
                  <tr> 
                    <th colspan="3" >Subtotal</th> 
                    <td > ${!!$user->payment!!}</td> 
                  </tr> 
                  <tr> 
                    <th colspan="2" >Tax</th> 
                    <td> % </td> 
                    <td >0</td> 
                  </tr> 
                  <tr> 
                    <th colspan="3" >Grand Total</th> 
                    <td >${!!$user->payment!!}</td> 
                  </tr> 
                </tfoot>
                <tr>
                    <th width="200"></th>
                    <th width="100"></th>
                    <th width="100"></th>
                    <th width="200"></th>
                  </tr>
        </table>     
    </body>
</html>