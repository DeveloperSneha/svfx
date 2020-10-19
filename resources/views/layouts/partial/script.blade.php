<!-- jQuery 3 -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>-->
 
<!-- jQuery -->
<script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Daterangepicker JavaScript -->
<script src="{{ asset('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('vendors/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ asset('dist/js/daterangepicker-data.js')}}"></script>
 <!-- Select2 JavaScript -->
<script src="{{ asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{ asset('dist/js/select2-data.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('dist/js/jquery.slimscroll.js')}}"></script>
<!-- Input Mask Plugin Js --> 
<script src="{{ asset('vendors/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.swf"></script>
<!-- Fancy Dropdown JS -->
<script src="{{ asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>
<!-- Dropzone JavaScript -->
<script src="{{ asset('vendors/dropzone/dropzone.js')}}"></script>
<!-- Data Table JavaScript -->
<script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('dist/js/dataTables-data.js')}}"></script>
<!-- FeatherIcons JavaScript -->
<script src="{{ asset('dist/js/feather.min.js')}}"></script>

<!--Nestable js -->
<script src="{{ asset('vendors/nestable2/dist/jquery.nestable.min.js')}}"></script>
<!-- Toggles JavaScript -->
<script src="{{ asset('vendors/jquery-toggles/toggles.min.js')}}"></script>
<script src="{{ asset('dist/js/toggle-data.js')}}"></script>

<!-- Counter Animation JavaScript -->
<script src="{{ asset('vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>

<!-- Form Wizard JavaScript -->
<script src="{{ asset('vendors/jquery-steps/build/jquery.steps.min.js')}}"></script>
<!-- Bootstrap Input spinner JavaScript -->
<script src="{{ asset('vendors/bootstrap-input-spinner/src/bootstrap-input-spinner.js')}}"></script>
<!-- Morris Charts JavaScript -->
<script src="{{ asset('vendors/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('vendors/morris.js/morris.min.js')}}"></script>

<!-- EChartJS JavaScript -->
<script src="{{ asset('vendors/echarts/dist/echarts-en.min.js')}}"></script>

<!-- Sparkline JavaScript -->
<script src="{{ asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

<!-- Vector Maps JavaScript -->
<script src="{{ asset('vendors/vectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{ asset('vendors/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{ asset('dist/js/vectormap-data.js')}}"></script>

<!-- Owl JavaScript -->
<script src="{{ asset('vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<!-- SweetAlert Plugin Js -->
<script src="{{asset('vendors/sweetalert/sweetalert.min.js')}}"></script> 
<!-- Toastr JS -->
<script src="{{ asset('vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js'></script>
<!-- Init JavaScript -->
<script src="{{ asset('dist/js/init.js')}}"></script>
<script src="{{ asset('dist/js/dashboard4-data.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

<script>
$('.datepicker').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1990,
    locale: {
      format: 'DD-MM-YYYY'
    },
    "cancelClass": "btn-secondary",
    minDate: moment('1950-01-01')
    }, function(start, end, label) {
});
function lettersOnly() 
          {
            var charCode = event.keyCode;
             //alert(charCode);
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8 || charCode == 32)

                return true;
            else
                return false;
          }
function isNumber(evt) 
          {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
          }

function isEmail(evt)
        {
          var status = false;     
          var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
             if (document.myform.email1.value.search(emailRegEx) == -1) {
                  alert("Please enter a valid email address.");
             }
             else if (document.myform.email1.value != document.myform.email2.value) {
                  alert("Please enter a valid email address.");
             }
             else {
                  // alert("Woohoo!  The email address is in the correct format and they are the same.");
                  status = true;
             }
             return status;
        }

function onlyNumbersandSpecialChar(evt) 
        {
            var e = window.event || evt;
            var charCode = e.which || e.keyCode;
        	
            if (charCode > 31 && (charCode < 48 || charCode > 57 || charCode > 107 || charCode > 219 || charCode > 221) && charCode != 40 && charCode != 32 && charCode != 41 && (charCode < 43 || charCode > 46)) {
                if (window.event) //IE
                    window.event.returnValue = false;
                else //Firefox
                    e.preventDefault();
            }
            return true;

        }
   

function onlylettersandSpecialChar() 
          {
	         var charCode = event.keyCode;
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8 || charCode == 40 || charCode == 41 || charCode == 32 ||charCode ==92 || charCode == 45 || charCode ==124)
                return true;
            else
                return false;
          }

function isAlphaNumeric(e)
          { // Alphanumeric only
            var k;
            document.all ? k=e.keycode : k=e.which;
            return((k>47 && k<58)||(k>64 && k<91)||(k>96 && k<123)||k==0);
          }
		 		 
function isNumberKey(evt)
          {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 32 && charCode > 31 && charCode != 45
              && (charCode < 48 || charCode > 57))
               return false;

            return true;
          }
	   
function checkDec(el)
          {
           var ex = /^[0-9]+\.?[0-9]*$/;
           if(ex.test(el.value)==false)
            {
              el.value = el.value.substring(0,el.value.length - 1);
            }
          }
</script>