<style>
.text { text-align:justify; color:#039; margin-top:30px;}
.color_bg { background:#FFF; padding:10px 40px;}
li, ol {color:#039;}
ul li{padding: 5px 1px;}
ol li{padding: 5px 1px;}
.about { color:#fff; font-size:24px; padding:10px 10px; font-weight:700}
.yoja { font-size:16px; color:#036}
#img { width:100%; height:150px}
.reaction{
    box-shadow: 0 0 2px #afa6a6;
    padding: 31px 14px;
}
</style>
  <div class="container" style="background:url('<?php echo base_url();?>assets/images/header.jpg'); border-top-left-radius:15px; border-top-right-radius:15px; ">
    <div class="about text-center">प्रतिक्रिया</h3></div>
  </div>
<div class="container color_bg">
	<div class="row">
		<div class="col-md-6 col-xs-offset-3 reaction">
		   <form class="form-horizontal" method="post" action="#">
		   	  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">नाम</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" placeholder="अपना नाम यहाँ दर्ज करें ">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">विषय</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" placeholder="अपना विषय यहाँ दर्ज करें ">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">मोबाइल </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" placeholder="मोबाइल नंबर दर्ज करें ">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">ईमेल </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" placeholder="अपना ईमेल पता यहां पर दर्ज करें ">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">संदेश </label>
			    <div class="col-sm-10">
			      <textarea class="form-control" placeholder="कृपया संदेश दर्ज करें। "></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="submit" class="btn btn-success" value="सबमिट करें ">
			    </div>
			  </div>
		   </form>
        </div>
    </div>
</div>
