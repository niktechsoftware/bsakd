<style>
.thumbnail { width:100%; overflow:hidden;}
#img { -webkit-transition:all 0.5s ease;}
#img:hover { transform:scale(1.1);}
</style>
<div class="container" style="background:#fff"><h2 align="center">फोटो गैलरी </h2>
<div class="row">


   <?php $val = $this->db->get("gallery"); 
   if($val->num_rows()>0)
   {
   $i=1;
   foreach($val->result() as $d):
  
  ?>     
<div class="col-md-3">
<div class="img-thumbnail">

<img src="<?php echo base_url();?>admin/assets/images/<?php echo $d->image; ?>"  alt="Cinque Terre" width="250" height="200">
</div>
</div>
 <?php $i++; endforeach;} ?>
 </div>
 </div>