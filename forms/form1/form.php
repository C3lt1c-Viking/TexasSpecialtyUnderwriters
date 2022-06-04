<div id="Form1Div" style="display: none">


  <style type="text/css">


  .jf-form{
    margin-top: 28px;
  }

  .jf-form > form{
    margin-bottom: 32px;
  }

  .jf-option-box{
    display: none;
    margin-left: 8px;
  }

  .jf-hide{
    display: none;
  }

  .jf-disabled {
      background-color: #eeeeee;
      opacity: 0.6;
      pointer-events: none;
  }

  /*
  overwrite bootstrap default margin-left, because the <label> doesn't contain the <input> element.
  */
  .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
    position: absolute;
    margin-top: 4px \9;
    margin-left: 0px;
  }

  div.form-group{
    padding: 8px 8px 4px 8px;
  }

  .mainDescription{
    margin-bottom: 10px;
  }

  p.description{
    margin:0px;
  }

  .responsive img{
    width: 100%;
  }

  p.error, p.validation-error{
    padding: 5px;
  }

  p.error{
    margin-top: 10px;
    color:#a94442;
  }

  p.server-error{
    font-weight: bold;
  }

  div.thumbnail{
    position: relative;
    text-align: center;
  }

  div.thumbnail.selected p{
    color: #ffffff;
  }

  div.thumbnail .glyphicon-ok-circle{
    position: absolute;
    top: 16px;
    left: 16px;
    color: #ffffff;
    font-size: 32px;
  }

  .jf-copyright{color: #888888; display: inline-block; margin: 16px;display:none;}

  .form-group.required .control-label:after {
      color: #dd0000;
      content: "*";
      margin-left: 6px;
  }

  .submit .btn.disabled, .submit .btn[disabled]{
    background: transparent;
    opacity: 0.75;
  }

  /* for image option with span text */
  .checkbox label > span, .radio label > span{
    display: block;
  }

  .form-group.inline .control-label,
  .form-group.col-1 .control-label,
  .form-group.col-2 .control-label,
  .form-group.col-3 .control-label
  {
    display: block;
  }

  .form-group.inline div.radio,
  .form-group.inline div.checkbox{
    display: inline-block;
  }

  .form-group.col-1 div.radio,
  .form-group.col-1 div.checkbox{
    display: block;
  }

  .form-group.col-2 div.radio,
  .form-group.col-2 div.checkbox{
    display: inline-flex;
    width: 48%;
  }

  .form-group.col-3 div.radio,
  .form-group.col-3 div.checkbox{
    display: inline-flex;
    width: 30%;
  }

  .clearfix:after {
     content: ".";
     visibility: hidden;
     display: block;
     height: 0;
     clear: both;
  }

  </style>
  <div class="container jf-form">
  <form data-licenseKey="JF-610826261H602281H" name="jqueryform-38d657" id="jqueryform-38d657" action='forms/form1/admin.php' method='post' enctype='multipart/form-data' novalidate autocomplete="on">
  <input type="hidden" name="method" value="validateForm">
  <input type="hidden" id="serverValidationFields" name="serverValidationFields" value="">



  <div class="form-group f1 required" data-fid="f1">
    <label class="control-label" for="f1">Agent Agency</label>
    <div class="input-group">
      <input type="text" class="form-control" id="f1" name="f1" value="" data-rule-required="true"  />
    </div>
  </div>

  <div class="form-group f8 required" data-fid="f8">
    <label class="control-label" for="f8">Agent Name:</label>
    <div class="input-group">
      <input type="text" class="form-control" id="f8" name="f8" value="" data-rule-required="true"  />
    </div>
  </div>

  <div class="form-group f9 required" data-fid="f9">
    <label class="control-label" for="f9">Agent Phone:</label>
    <div class="input-group">
      <input type="tel" class="form-control" id="f9" name="f9" value=""   placeholder="xxx-xxx-xxxx" data-rule-pattern="[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}" data-msg-pattern="Invalid phone number" data-rule-required="true"   />
    </div>
  </div>

  <div class="form-group f12 required" data-fid="f12">
    <label class="control-label" for="f12">Applicant Name:</label>
    <div class="input-group">
      <input type="text" class="form-control" id="f12" name="f12" value="" data-rule-required="true"  />
    </div>
  </div>




  <div class="form-group gaddress f13 required" data-fid="f13">
      <label class="control-label">Mailing Address:</label>
      <div class="form-group addressLine1">
          <label class="control-label sr-only" for="f13_addressLine1">Address Line1</label>
          <input type="text" class="form-control gaddress-autocomplete" data-gaddress-types="street_number route" data-gaddress-name="long_name" id="f13_addressLine1" name="f13_addressLine1" value=""  aria-describedby="f13_addressLine1-help-block" placeholder="1234 Main St."
      data-rule-required="true" data-msg-required="This field is required."  />
          <p id="f13_addressLine1-help-block" class="description sr-only">Street address, P.O. box, company name, c/o</p>
      </div>


      <div class="form-group city">
          <label class="control-label sr-only" for="f13_city">City</label>
          <input type="text" class="form-control" data-gaddress-types="locality" data-gaddress-name="long_name"  id="f13_city" name="f13_city" value=""  aria-describedby="f13_city-help-block" placeholder="City"
      data-rule-required="true" data-msg-required="This field is required."  />
          <p id="f13_city-help-block" class="description sr-only">City</p>
      </div>

      <div class="form-group state">
          <label class="control-label sr-only" for="f13_state">State / Province / Region</label>
          <input type="text" class="form-control" data-gaddress-types="administrative_area_level_1" data-gaddress-name="long_name"  id="f13_state" name="f13_state" value=""  aria-describedby="f13_state-help-block" placeholder="State / Province / Region"
      data-rule-required="true" data-msg-required="This field is required."   />
          <p id="f13_state-help-block" class="description sr-only">State / Province / Region</p>
      </div>

      <div class="form-group postalCode">
          <label class="control-label sr-only" for="f13_postalCode">Postal / Zip Code</label>
          <input type="text" class="form-control" data-gaddress-types="postal_code" data-gaddress-name="long_name" id="f13_postalCode" name="f13_postalCode" value=""  aria-describedby="f13_postalCode-help-block" placeholder="Postal / Zip Code"
      data-rule-required="true" data-msg-required="This field is required."  />
          <p id="f13_postalCode-help-block" class="description sr-only">Postal / Zip Code</p>
      </div>

      <div class="form-group country">
          <label class="control-label sr-only" for="f13_country">Country</label>
          <input type="text" class="form-control" data-gaddress-types="country" data-gaddress-name="long_name" id="f13_country" name="f13_country" value=""  aria-describedby="f13_country-help-block" placeholder="Country"
      data-rule-required="true" data-msg-required="This field is required."  />
          <p id="f13_country-help-block" class="description sr-only">Country</p>
      </div>

      <div class='mq-indicator'></div>

  </div>




  <div class="form-group f10 required" data-fid="f10">
    <label class="control-label" for="f10">Applicant Is:</label>
    <div class="input-group"><span class="input-group-addon left"><i class="fa fa-suitcase"></i> </span>
      <select class="form-control" id="f10" name="f10" data-rule-required="true" >
        <option  value="">- Select -</option>
        <option  value="Individual">Individual</option>
        <option  value="Partnership">Partnership</option>
        <option  value="LLC">LLC</option>
        <option  value="Corporation">Corporation</option>
        <option  value="Other">Other</option>
        </select>
      </div>
  </div>


  <div class="form-group f15 " data-fid="f15">
    <label class="control-label" for="f15">Other Corporation Type:</label>
    <div class="input-group">
      <input type="text" class="form-control" id="f15" name="f15" value=""     />
    </div>
  </div>




  <div class="form-group f14 required" data-fid="f14">
    <label class="control-label" for="f14">Policy From Date:</label>

  <div class="input-group date">
  <input type="date" class="form-control datepicker" id="f14" name="f14" value="" data-rule-required="true"   />
  <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>

  </div>




  <div class="form-group f16 required" data-fid="f16">
    <label class="control-label" for="f16">Policy To Date:</label>

  <div class="input-group date">
  <input type="date" class="form-control datepicker" id="f16" name="f16" value="" data-rule-required="true"   />
  <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>

  </div>




  <div class="form-group gaddress f17 required" data-fid="f17">
      <label class="control-label">Location Address:</label>

      <div class="form-group addressLine1">
          <label class="control-label sr-only" for="f17_addressLine1">Address Line1</label>
          <input type="text" class="form-control gaddress-autocomplete" data-gaddress-types="street_number route" data-gaddress-name="long_name" id="f17_addressLine1" name="f17_addressLine1" value=""  aria-describedby="f17_addressLine1-help-block" placeholder="1234 Main St."
      data-rule-required="true" data-msg-required="This field is required."  />
          <p id="f17_addressLine1-help-block" class="description sr-only">Street address, P.O. box, company name, c/o</p>
      </div>


      <div class="form-group city">
          <label class="control-label sr-only" for="f17_city">City</label>
          <input type="text" class="form-control" data-gaddress-types="locality" data-gaddress-name="long_name"  id="f17_city" name="f17_city" value=""  aria-describedby="f17_city-help-block" placeholder="City"
      data-rule-required="true" data-msg-required="This field is required."  />
          <p id="f17_city-help-block" class="description sr-only">City</p>
      </div>

      <div class="form-group state">
          <label class="control-label sr-only" for="f17_state">State / Province / Region</label>
          <input type="text" class="form-control" data-gaddress-types="administrative_area_level_1" data-gaddress-name="long_name"  id="f17_state" name="f17_state" value=""  aria-describedby="f17_state-help-block" placeholder="State / Province / Region"
      data-rule-required="true" data-msg-required="This field is required."   />
          <p id="f17_state-help-block" class="description sr-only">State / Province / Region</p>
      </div>

      <div class="form-group postalCode">
          <label class="control-label sr-only" for="f17_postalCode">Postal / Zip Code</label>
          <input type="text" class="form-control" data-gaddress-types="postal_code" data-gaddress-name="long_name" id="f17_postalCode" name="f17_postalCode" value=""  aria-describedby="f17_postalCode-help-block" placeholder="Postal / Zip Code"
      data-rule-required="true" data-msg-required="This field is required."  />
          <p id="f17_postalCode-help-block" class="description sr-only">Postal / Zip Code</p>
      </div>

      <div class="form-group country">
          <label class="control-label sr-only" for="f17_country">Country</label>
          <input type="text" class="form-control" data-gaddress-types="country" data-gaddress-name="long_name" id="f17_country" name="f17_country" value=""  aria-describedby="f17_country-help-block" placeholder="Country"
      data-rule-required="true" data-msg-required="This field is required."  />
          <p id="f17_country-help-block" class="description sr-only">Country</p>
      </div>

      <div class='mq-indicator'></div>

  </div>




  <div class="form-group f18 required" data-fid="f18">
    <label class="control-label" for="f18">Fully Describe Applicant's Operations:</label>


  <input type="text" class="form-control" id="f18" name="f18" value=""
      data-rule-required="true"  />



  </div>




  <div class="form-group f19 required" data-fid="f19">
    <label class="control-label" for="f19">Describe Special Equipment Used:</label>


  <input type="text" class="form-control" id="f19" name="f19" value=""
      data-rule-required="true"  />



  </div>




  <div class="form-group f21 required" data-fid="f21">
    <label class="control-label" for="f21">Gross Reciepts:</label>


  <input type="text" class="form-control" id="f21" name="f21" value=""
      data-rule-required="true"  />



  </div>




  <div class="form-group f20 required" data-fid="f20">
    <label class="control-label" for="f20">Full Time Staff:</label>


  <select class="form-control" id="f20" name="f20"
      data-rule-required="true" >
    <option  value="">- Select -</option>
    <option  value="1-10">1-10</option>
    <option  value="11-20">11-20</option>
    <option  value="21-30">21-30</option>
    <option  value="31-40">31-40</option>
    <option  value="41-50">41-50</option>
    </select>


  </div>




  <div class="form-group f25 required" data-fid="f25">
    <label class="control-label" for="f25">Full Time Payroll:</label>


  <input type="text" class="form-control" id="f25" name="f25" value=""
      data-rule-required="true"  />



  </div>




  <div class="form-group f23 required" data-fid="f23">
    <label class="control-label" for="f23">Part Time Staff:</label>


  <select class="form-control" id="f23" name="f23"
      data-rule-required="true" >
    <option  value="">- Select -</option>
    <option  value="0-10">0-10</option>
    <option  value="11-20">11-20</option>
    <option  value="21-30">21-30</option>
    <option  value="31-40">31-40</option>
    <option  value="41-50">41-50</option>
    </select>


  </div>




  <div class="form-group f24 required" data-fid="f24">
    <label class="control-label" for="f24">Part Time Payroll:</label>


  <input type="text" class="form-control" id="f24" name="f24" value=""
      data-rule-required="true"  />



  </div>




  <div class="form-group f27 required" data-fid="f27">
    <label class="control-label" for="f27">Owners Payroll:</label>


  <input type="text" class="form-control" id="f27" name="f27" value=""
      data-rule-required="true"  />



  </div>




  <div class="form-group f28 required" data-fid="f28">
    <label class="control-label" for="f28">Operations Out of State:</label>


  <select class="form-control" id="f28" name="f28"
      data-rule-required="true" >
    <option  value="">- Select -</option>
    <option  value="Yes">Yes</option>
    <option  value="No">No</option>
    </select>


  </div>




  <div class="form-group f29 " data-fid="f29">
    <label class="control-label" for="f29">Describe:</label>


  <input type="text" class="form-control" id="f29" name="f29" value=""     />



  </div>




  <div class="form-group f30 required" data-fid="f30">
    <label class="control-label" for="f30">Years In Business:</label>


  <input type="text" class="form-control" id="f30" name="f30" value=""
      data-rule-required="true"  />



  </div>




  <div class="form-group f31 required" data-fid="f31">
    <label class="control-label" for="f31">Prior Years of Experience in Set Field:</label>


  <input type="text" class="form-control" id="f31" name="f31" value=""
      data-rule-required="true"  />



  </div>




  <div class="form-group f32 " data-fid="f32">
    <label class="control-label" for="f32">Prior Carrier Information: Year 1</label>


  <input type="text" class="form-control" id="f32" name="f32" value=""     />



  </div>




  <div class="form-group f33 " data-fid="f33">
    <label class="control-label" for="f33">Prior Carrier Information Company:</label>


  <input type="text" class="form-control" id="f33" name="f33" value=""     />



  </div>




  <div class="form-group f34 " data-fid="f34">
    <label class="control-label" for="f34">Prior Carrer Information Premium:</label>


  <input type="text" class="form-control" id="f34" name="f34" value=""     />



  </div>




  <div class="form-group f35 " data-fid="f35">
    <label class="control-label" for="f35">Prior Carrier Information Incurred Losses:</label>


  <input type="text" class="form-control" id="f35" name="f35" value=""     />



  </div>




  <div class="form-group f36 " data-fid="f36">
    <label class="control-label" for="f36">Prior Carrier Information No. of Losses:</label>


  <input type="text" class="form-control" id="f36" name="f36" value=""     />



  </div>




  <div class="form-group f37 " data-fid="f37">
    <label class="control-label" for="f37">Prior Carrier Information Year 2:</label>


  <input type="text" class="form-control" id="f37" name="f37" value=""
       />



  </div>




  <div class="form-group f39 " data-fid="f39">
    <label class="control-label" for="f39">Prior Carrier Information Company:</label>


  <input type="text" class="form-control" id="f39" name="f39" value=""     />



  </div>




  <div class="form-group f38 " data-fid="f38">
    <label class="control-label" for="f38">Prior Carrier Information Premium:</label>


  <input type="text" class="form-control" id="f38" name="f38" value=""     />



  </div>




  <div class="form-group f40 " data-fid="f40">
    <label class="control-label" for="f40">Prior Carrier Information Incurred Losses:</label>


  <input type="text" class="form-control" id="f40" name="f40" value=""     />



  </div>




  <div class="form-group f41 " data-fid="f41">
    <label class="control-label" for="f41">Prior Carrier Information No. of Losses:</label>


  <input type="text" class="form-control" id="f41" name="f41" value=""     />



  </div>




  <div class="form-group f42 " data-fid="f42">
    <label class="control-label" for="f42">Prior Carrier Information Year 3:</label>


  <input type="text" class="form-control" id="f42" name="f42" value=""     />



  </div>




  <div class="form-group f43 " data-fid="f43">
    <label class="control-label" for="f43">Prior Carrier Information Company:</label>


  <input type="text" class="form-control" id="f43" name="f43" value=""     />



  </div>




  <div class="form-group f44 " data-fid="f44">
    <label class="control-label" for="f44">Prior Carrier Information Premium:</label>


  <input type="text" class="form-control" id="f44" name="f44" value=""     />



  </div>




  <div class="form-group f45 " data-fid="f45">
    <label class="control-label" for="f45">Prior Carrier Incurred Losses:</label>


  <input type="text" class="form-control" id="f45" name="f45" value=""     />



  </div>




  <div class="form-group f46 " data-fid="f46">
    <label class="control-label" for="f46">Prior Carrier No. of Losses:</label>


  <input type="text" class="form-control" id="f46" name="f46" value=""     />



  </div>




  <div class="form-group f47 " data-fid="f47">
    <label class="control-label" for="f47">Description of Operation & Classification:</label>


  <input type="text" class="form-control" id="f47" name="f47" value=""     />



  </div>




  <div class="form-group f48 required" data-fid="f48">
    <label class="control-label" for="f48">Limit of Liability:</label>


  <select class="form-control" id="f48" name="f48"
      data-rule-required="true" >
    <option  value="">- Select -</option>
    <option  value="$100,000">$100,000</option>
    <option  value="$300,000">$300,000</option>
    <option  value="$500,000">$500,000</option>
    <option  value="$1,000,000">$1,000,000</option>
    </select>


  </div>




  <div class="form-group f49 " data-fid="f49">
    <label class="control-label" for="f49">Other Limit of Liability:</label>


  <input type="text" class="form-control" id="f49" name="f49" value=""     />



  </div>




  <div class="form-group f51 required" data-fid="f51">
    <label class="control-label" for="f51">Applicant Signature:</label>
  <input type="text" class="canvasData" value="" id="f51" name="f51" data-rule-required="true"  >



  </div>




  <div class="form-group f52 required" data-fid="f52">
    <label class="control-label" for="f52">Signing Date:</label>

  <div class="input-group date">
  <input type="date" class="form-control datepicker" id="f52" name="f52" value=""
      data-rule-required="true"   />
  <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>

  </div>



  <div class="form-group submit f0 " data-fid="f0" style="position: relative;">
    <label class="control-label sr-only" for="f0" style="display: block;">Submit Button</label>

    <div class="progress" style="display: none; z-index: -1; position: absolute;">
      <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:100%">
      </div>
    </div>

    <button type="submit" class="btn btn-primary btn-lg" style="z-index: 1;">
    		Submit
    </button>

  </div><div class="clearfix"></div>

  <div class="submit">
    <p class="error bg-warning" style="display:none;">
      Please check the required fields.  </p>
  </div>

  <div class="clearfix"></div>


  </form>

  <a href="http://www.jqueryform.com" target="_blank" class="jf-copyright">Powered by jqueryform.com</a>
  </div>

  <div class="container jf-thankyou" style="display:none;" data-redirect="" data-seconds="10">
    <h3>Your form has been submitted. Thank You!</h3>
  </div>
  <!-- ----------------------------------------------- -->


  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
  <script src="vendor.js" ></script>

  <script src="jqueryform.com.min.js?ver=v3.0.3&id=jqueryform-38d657" ></script>




  <!-- [ Start: Select2 support ] ---------------------------------- -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
  <style type="text/css">
  .select2-hidden-accessible{
  	opacity: 0;
      width:1% !important;
  }
  .select2-container .select2-selection--single{
    height: 34px;
    padding-top: 2px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    border: 1px solid #ccc;
  }
  .select2-container--default .select2-selection--single .select2-selection__arrow{
    top: 4px;
  }
  </style>
  <script type="text/javascript">
  ;(function(){

  	function templateResult (obj) {
  	  if (!obj.id) { return obj.text; }

  	  var img = $(obj.element).data('imgSrc');
  	  if( img ){
  	    return $( '<span><img src="' + img + '" class="img-flag" /> ' + obj.text + '</span>' );
  	  };

  	  return obj.text;
  	};

  	$(".jf-form select").css('width', '100%'); // make it responsive
  	$(".jf-form select").select2({
  	  templateResult: templateResult
  	}).change( function(e){
  	  $(e.target).valid();
  	});

  	// disable soft keyboard on mobile devices
  	var isMobile = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
  	if( isMobile ){
  		setTimeout( function(){
  			$('.select2-search__field').prop('readonly',true);
  		},500);
  	}; // isMobile

  })();
  </script>
  <!-- [ End: Select2 support ] ---------------------------------- -->



  <style>
  .gaddress .form-group {
    padding-left: 0px;
  }

  .gaddress .mq-indicator{
    display:none;
  }

  @media only screen and (min-width : 767px) {
      .gaddress .mq-indicator{
        display:block;
        height:1px;
        margin-top: -19px;
      }

      .gaddress .form-group.city,
      .gaddress .form-group.state,
      .gaddress .form-group.postalCode,
      .gaddress .form-group.country
      {
          display: inline-block;
          width: 48%;
          vertical-align: top;
      }

  }
  </style>



  <style type="text/css">
  canvas.signature {
  	border: 2px solid #cccccc;
  	display: block;
  }
  canvas.signature ~ input.canvasData{
    opacity: 0;
  }
  </style>

  <script type="text/javascript">

  	// start jqueryform initialization
  	// --------------------------------
  	JF.init( '#' + $('.jf-form > form:first-child').attr('id') );

  </script>

</div>
