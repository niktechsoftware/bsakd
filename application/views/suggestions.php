<style>
#form { padding:20px 20px; font:Arial, Helvetica, sans-serif; color:#C90; background:rgba(0,0,0,0.5); border-radius:8px; font-weight:500}
.form { width:100%; height:40px; margin:2px; border-radius:4px; border-color:#000; color:#000}
#sect { background:url(images/bg4.html); background-attachment:fixed; background-repeat:no-repeat; padding:10px 10px; font-size:16px}
h2 { color:#CC0}
</style>
<div class="container">
<div class="row" style="background:#fff">
</div>
<div class="row" id="sect">
	<div class="col-sm-3"></div>
    <div class="col-sm-6">
                <form method="POST" action="https://basiceducationup.com/website/add_suggestion_details">
    	<div class="row" id="form"><h2 align="center">कृपया  अपना सुझाव / समस्या भरें</h2><br />

    		<div class="col-sm-4" style="color: white;">वर्ग</div>
            <div class="col-sm-8">
              <Select class="form" name="section" required="required">
                <option value="Suggestion">सुझाव</option>
                <option value="Problem">समस्या </option>
              </Select>
            </div>
            
            <div class="col-sm-4" style="color: white;">विषय </div>
            <div class="col-sm-8"><input type="text" placeholder="अपना विषय यहाँ दर्ज करें" class="form" name="subject" required="required"></div>
            
            <div class="col-sm-4" style="color: white;">नाम </div>
            <div class="col-sm-8"><input type="text" placeholder="अपना नाम यहाँ दर्ज करें" class="form" name="name" required="required"></div>
            
            <div class="col-sm-4" style="color: white;">जनपद  </div>
            <div class="col-sm-8"><input type="text" placeholder="जनपद  का नाम दर्ज करें" class="form" name="district" required="required"></div>
            
           	<div class="col-sm-4" style="color: white;">ईमेल </div>
            <div class="col-sm-8"><input type="email" placeholder="अपना ई मेल यहा भरे" class="form" name="email" required="required"></div>
            
            <div class="col-sm-4" style="color: white;">मोबाइल </div>
            <div class="col-sm-8"><input type="text" placeholder="यहां अपना मोबाइल दर्ज करें" class="form" name="mobile" required="required"></div>

            <div class="col-sm-4" style="color: white;">टिप्पणी </div>
            <div class="col-sm-8"><textarea class="form" style="height:70px; border-color:#036;" placeholder="कृपया अपने सुझाव / समस्याएं यहां लिखें( अधिकतम सीमा- 255 अक्षर)"  name="message" required="required" maxlength="250"></textarea></div><br />
            <div class="col-sm-4"></div>
            <div class="col-sm-8"><input type="submit" value="सबमिट " class="btn" style=" background-image: linear-gradient(#A60000, #F60, #800); color: white;"name="submit">
            						<input type="reset" value="रीसेट" class="btn" style=" background-image: linear-gradient(#A60000, #F60, #800); color: white;"> </div>
    	</form>
    </div>
    <div class="col-sm-3"></div>
</div>
</div>
</div>
</div>
