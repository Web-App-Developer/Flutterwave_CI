<style>
.inpt-head-place{ display:none;}
@media only screen and (max-width: 767px){
.header{background: transparent !important;}	
.header.active{background:#Fff !important;}
}
header
{
  position:inherit !important;
}
</style>

<?php 
//print_r($this->session->userdata('language_code'));	
$this->load->view('site/templates/header');

//print_r($_SESSION);
?>

<link rel="stylesheet" href="css/site/themes-smoothness-jquery-ui.css"  type="text/css"/>
<link rel="stylesheet" href="css/site/jquery.datePicker.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>


<script type="text/javascript">


	var tag = document.createElement('script');

	tag.src = "//www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	var player;

	function onYouTubeIframeAPIReady() {
		player = new YT.Player('ytplayer', {
			events: {
				'onReady': onPlayerReady
			}
		});
	}

	function onPlayerReady() {
		player.playVideo();
		// Mute!
		player.mute();
                player.on("contextmenu",function(e){
        alert('right click disabled');
        return false;
    });

	}

</script>

<section>




<div class="banner-container">



<div class="banner-container-bg"></div>

    <div class="row">



        <div class="col-md-12">

			<?php if($adminList->slider == "on") { ?>
			

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              

                <ul class="carousel-inner">

                     <?php 

					 $slider_loop=1;

					 foreach ($SliderList->result() as $Slider){ 

				if($Slider->image !=''){

					$ImgSrc=$Slider->image;

				}else{

					$ImgSrc='dummyProductImage.jpg';

				}

				  ?>

				<li class="item <?php if($slider_loop==1){ $slider_loop=2;?>active<?php }?>">

				<img src="images/slider/thumb/<?php echo $ImgSrc;?>" alt="<?php echo $Slider->slider_title; ?>">

				</li>

				<?php }?> 

              

				</ul>

				

				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">

                   <span class="fa fa-chevron-left"></span></a><a class="right carousel-control"

                        href="#carousel-example-generic" data-slide="next"><span class="fa fa-chevron-right">

                        </span></a>

				

            </div>

			<?php } else { ?>

			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                     <ul class="carousel-inner">



                    <?php 

					if($SliderList->row()->image !='')

					{

						$ImgSrc=$SliderList->row()->image;

					}

					else

					{

						$ImgSrc='dummyProductImage.jpg';

					}

					?>



				

					<?php $imagepath ="images/slider/thumb/"; ?>

					<li class="item active" style="height: 600px;">






        <section class="content-section video-section" style="position: relative; height: 600px;">

			<div class="pattern-overlay">
        <?php {?>
        
		<iframe width="100%" height="130%" id="ytplayer" type="text/html" src="<?php echo $adminList->videoUrl;?>?playlist=&start=60&rel=0&autoplay=1&controls=0&showinfo=0&loop=1&iv_load_policy=3&enablejsapi=1" frameborder="0" ></iframe>
<?php } ?>
	
			</div>

		</section>
                    

            </li>

			</ul>

			</div>

			<?php }?>

            <div class="main-text hidden-xs">



                <div class="col-md-12 text-center">







                    <div class="container">



                    
                    <h1><?php 
					/* if($adminList->home_title_1 != ''){
						echo $adminList->home_title_1;
					}
					else{
					if($this->lang->line('WELCOMEHOME') != '') { echo stripslashes($this->lang->line('WELCOMEHOME')); } else echo "WELCOME HOME";} */ ?></h1>



                    <p style="font-size: 25px; color:  #111;"><?php
						/* if($adminList->home_title_2 != ''){
						echo $adminList->home_title_2;
					}
					else{
						
					if($this->lang->line('Rentuniqueplacestostay') != '') { echo stripslashes($this->lang->line('Rentuniqueplacestostay')); } else echo "Rent unique places to stay"; } */ ?></p>

					

					</div>



                    



            </div>



        </div>







         </div>



    </div>



</div>



<div id="push">



</div>







</section>





<section>

<div class="relative-holder">
<div class="searching-section">


 <div class="container">



    <!--This is for mobile view  doesnot disply in normal view only for mobil -->








<!-- WILL DISPLAY ONLY ON MODILE FOE RESPONSIVE > STATIC start-->
<div class="searct-sechs mobile-display ">
   <a class="mobile-selecbox" href="#success" data-toggle="modal">
<input class="search-text" placeholder="<?php if($this->lang->line('search_where') != '') { echo stripslashes($this->lang->line('search_where')); } else echo "Where to?"; ?>" type="text">
<input class="sbt-btn" value="Search" type="submit">
</a>
    <!-- Modal -->
    
    <!-- Modal -->
    <div class="modal fade banerpop" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                      <form  class="mobilform" method="get" action="property" id="property_search_form_mob" accept-charset="UTF-8" >
					  
						<input name="city" id="autocompleteNew" class="where" placeholder="<?php if($this->lang->line('search_where') != '') { echo stripslashes($this->lang->line('search_where')); } else echo "Where to?"; ?>"  type="text"  >
						<div class="LocationInput__error"><span class="city_error_mob"></span></div>
					
<input type="text" class="chek from_date" placeholder="<?php if($this->lang->line('check_in') != '') { echo stripslashes($this->lang->line('check_in')); } else echo "Check In";?>" value="<?php if($_GET['datefrom']!='')echo $_GET['datefrom'];else if($_POST['datefrom'])echo $_POST['datefrom']; ?>" id="datepicker_mob" name="datefrom" readonly style="cursor:pointer;"  >
<input class="chek-in to_date" type="text" placeholder="<?php if($this->lang->line('check_out') != '') { echo stripslashes($this->lang->line('check_out')); } else echo "Check out";?>"  id="datepicker_mob1" value="<?php if($_GET['dateto']!='')echo $_GET['dateto'];else if($_POST['dateto'])echo $_POST['dateto']; ?>" name="dateto" readonly style="cursor:pointer;" >
<?php /*
                        <input  name="datefrom" class="chek from_date" placeholder="<?php if($this->lang->line('check_in') != '') { echo stripslashes($this->lang->line('check_in')); } else echo "Check in"; ?>" type="text" contenteditable="false">

                        <input  name="dateto" class="chek-in to_date" placeholder="<?php if($this->lang->line('check_out') != '') { echo stripslashes($this->lang->line('check_out')); } else echo "Check out"; ?>" type="text" contenteditable="false">
*/ ?>
                         <!--<input name="guests" class="guest" placeholder="Number of guest" type="text">-->

                            <?php if($accommodates !='' && count($accommodates)){     ?>
                        <select name="guests" class="home_select"><span><i class="caret"></i></span>

                         <?php foreach($accommodates as $accommodate) {
                        if($accommodate==1){  ?>
                         <option value="<?php echo $accommodate;?>"><?php echo $accommodate.' '?><?php if($this->lang->line('guest') != '') { echo stripslashes($this->lang->line('guest')); } else echo "Guest";?><i class="caret" style="color:#000"></i></option>
                         <?php } else { ?>
                         <option value="<?php echo $accommodate;?>">
                         <?php echo $accommodate.' ';?><?php if($this->lang->line('guest') != '') { echo stripslashes($this->lang->line('guest')); } else echo "Guest";?></option>
                         <?php } ?>
                         <?php }?>
                         </select>
                        <?php } ?>
                         <input class="fom-subm" value="<?php if($this->lang->line('search') != '') { echo stripslashes($this->lang->line('search')); } else echo "Search"; ?>" type="button" onclick="property_search_mob();">
						 
                 </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->



</div>
<!-- WILL DISPLAY ONLY ON MODILE FOE RESPONSIVE >    end-->
<!--This is for mobile view  END -->
<div class="heading_home">
<p><span><?php if($this->lang->line('Homestay') != '') { echo stripslashes($this->lang->line('Homestay'));  } else { "HomestayDNN";} ?></span> <?php if($this->lang->line('Book_unique_homes') != '') { echo stripslashes($this->lang->line('Book_unique_homes'));  } else { "Book unique homes and";} ?><br><?php if($this->lang->line('experience_a_city') != '') { echo stripslashes($this->lang->line('experience_a_city'));  } else { "experience a city like a local.";} ?></p>
</div>


                 <form  class="webform" method="get" action="property" id="property_search_form" accept-charset="UTF-8">
<div class="SearchForm__row">

                        <div class="search-sec srch_whr">
						<p><?php if($this->lang->line('Where') != '') { echo stripslashes($this->lang->line('Where')); } else echo "Where?"; ?></p>
						<input name="city" id="autocompleteNewMobile" class="where" placeholder="<?php if($this->lang->line('search_where') != '') { echo stripslashes($this->lang->line('search_where')); } else echo "Where do you want to go?"; ?>" value=""  type="text"  ></div>
						
 <div class="LocationInput__error"><span class="city_error"></span></div>
                        
<?php /*
                        <input  name="datefrom" class="chek from_date" placeholder="<?php if($this->lang->line('check_in') != '') { echo stripslashes($this->lang->line('check_in')); } else echo "Check in"; ?>" type="text" contenteditable="false">
						<input  name="dateto" class="chek-in to_date" placeholder="<?php if($this->lang->line('check_out') != '') { echo stripslashes($this->lang->line('check_out')); } else echo "Check out"; ?>" type="text" contenteditable="false">
*/ ?>
		 <div class="search-sec srch_whn">
							<p><?php if($this->lang->line('When') != '') { echo stripslashes($this->lang->line('When')); } else echo "When?"; ?></p>					
<input type="text" class="chek from_date" placeholder="<?php if($this->lang->line('check_in') != '') { echo stripslashes($this->lang->line('check_in')); } else echo "Check in";?>" value="<?php if($_GET['datefrom']!='')echo $_GET['datefrom'];else if($_POST['datefrom'])echo $_POST['datefrom']; ?>" id="datepicker" name="datefrom" readonly style="cursor:pointer;" />
<input type="text" class="chek-in to_date" placeholder="<?php if($this->lang->line('check_out') != '') { echo stripslashes($this->lang->line('check_out')); } else echo "Check out";?>"  id="datepicker1" value="<?php if($_GET['dateto']!='')echo $_GET['dateto'];else if($_POST['dateto'])echo $_POST['dateto']; ?>" name="dateto" readonly style="cursor:pointer;" />
</div>


                         <!--<input name="guests" class="guest" placeholder="Number of guest" type="text">-->

                            <?php if($accommodates !='' && count($accommodates)){  ?>
<div class="search-sec-gust">
<div class="search-sec-gust-in">
						<p><?php if($this->lang->line('Guest') != '') { echo stripslashes($this->lang->line('Guest')); } else echo "Guest?"; ?></p>	
                        <select name="guests" class="home_select"><span><i class="caret"></i></span>
                         <?php foreach($accommodates as $accommodate) {
                        if($accommodate==1){
                         ?>
                         <option value="<?php echo $accommodate;?>"><?php echo $accommodate.' '?> <?php if($this->lang->line('guest') != '') { echo stripslashes($this->lang->line('guest_s')); } else echo "Guest";?><i class="caret" style="color:#000"></i></option>
                         <?php } else { ?>
                         <option value="<?php echo $accommodate;?>">
                         <?php echo $accommodate.' ';?> <?php if($this->lang->line('guest') != '') { echo stripslashes($this->lang->line('guest')); } else echo "Guests";?></option>
                         <?php } ?>
                         <?php }?>
                         </select>
                        <?php } ?>
</div>
                     <input class="fom-subm" value="<?php if($this->lang->line('search') != '') { echo stripslashes($this->lang->line('search')); } else echo "Search"; ?>" type="button" onclick="property_search();">
					 </div>    
</div>
<input type="hidden" name="language_code" id="language_code" value="<?php echo $this->session->userdata('language_code'); ?>" >
                 </form>
				
				     
                     <span id="city_warn"></span>       

                </div>

                  </div>
</div>
</section>
<div class="clear"></div>
<div class="container">
<div class="tab-menu">
<ul>
<li style="border-bottom: 2px solid #752b7e;"><a href=""><?php if($this->lang->line('for_you') != '') { echo stripslashes($this->lang->line('for_you')); } else echo "FOR YOU"; ?></a></li>
<li style="text-transform: uppercase;"	><a href="<?php  echo base_url();?>explore_listing"><?php if($this->lang->line('places') != '') { echo stripslashes($this->lang->line('places')); } else echo strtoupper("Places"); ?></a></li>
<li><a href="<?php  echo base_url();?>explore_experience"><?php if($this->lang->line('experience') != '') { echo stripslashes($this->lang->line('experience')); } else echo "EXPERIENCE"; ?></a></li>
</ul>
</div>
</div>







<!--
<section>
<div class="fraet-exp-section">
<div class="container">
<div class="top-title-structure">
<h2 class="find-a-place">Featured Property</h2>
<span class="discover-place">Choose your favorite property</span>
</div>


<ul id="myList">
    <?php //echo "<pre>"; print_r($featuredLists->result_array());die;
        foreach($featuredLists->result_array() as $exp){ 
        $review_count = $this->landing_model->get_all_details(REVIEW,array('product_id'=>$exp['id']));
		
		//echo "<pre>"; print_r($review_count->result());die;
        $count_rating = 0;
        foreach($review_count->result() as $c_t){
        $count_rating = $count_rating + $c_t->total_review;
        }
        $image_count = round($count_rating/$review_count->num_rows());
    ?>

<li class="col-sm-4 col-xs-6">
<div class="country-product-container">
    <figure><a href="<?php echo base_url() ?>rental/<?php echo $exp['id']; ?>">
    
<img src="<?php if(strpos($exp['product_image'], 's3.amazonaws.com') > 1)
echo $exp['product_image'];

else echo base_url()."server/php/rental/".$exp['product_image']; ?>">
        
    </a>

        <div class="start-side">
            <span class="start"><img src="images/review/star_rating_<?php echo $image_count; ?>.png"></span>
<?php ?>
<span class="feture-name">(<?php echo $review_count->num_rows(); ?>)</span>
</div>

<div class="price-tags">
<span class="price-numr"><?php echo  $this->session->userdata('currency_s').' '.CurrencyValue($exp['id'] ,stripslashes($exp['price'])); ?></span>

</div>

</figure>
<div class="botm-full-contnr">
    <div class="pricing-contnr">
<div class="price-loops">
<a href="<?php echo base_url(); ?>users/show/<?php echo $exp['property_owner']?>" class="aurtrs-img">
<?php  if($exp['image'] !=''){ ?>
<img  src="images/users/<?php echo $exp['image'];?>"/>
<?php  } else { ?>
<img  src="images/site/safe_image.png"/>
<?php  } ?>
</a>

</div>

    </div>

    <div class="detail-container-text">
        <div class="detail-container-text-top">
  <span class="contrys-name"><?php echo $exp['country']; ?></span>
  <span class="feture-name"><?php echo $exp['room_type']; ?></span>
 
        </div>

<div class="detail-container-text-bottom">
<p><?php echo $exp['product_title']; ?></p>
        </div>

</div>
    </div>

</div>
</li>
        <?php } ?>

</ul>

</div>
</div>

</section> -->




<!-- Body of the Page-->





<!-- Slider1-->
<div class="clear"></div>
<div class="container">

<div class="cont_sub" id="featured_caro">
<h3><?php if($this->lang->line('Featured_destinations') != '') { echo stripslashes($this->lang->line('Featured_destinations'));  } else { "Featured destinations";} ?></h3>
<?php //echo "<pre>"; print_r($CityDetails->result());
				//die; ?>
				
    <div class="row">
        <div class="col-md-12" id="col_marg">
            <div id="news-slider1" class="owl-carousel">
                
				<!-- Slide 1-->
				<?php if($CityDetails->result() > 0){ 

				
		//$i = 1;

		foreach($CityDetails->result() as $CityRows){
		$Cityname=str_replace(' ','+',$CityRows->name);
		
		if ($CityRows->state_name!=''){
			$StateName=",".str_replace(' ','+',$CityRows->state_name);
		}else{
			$StateName=" ";
		}
		
		if($CityRows->country!=''){
			$Country=",".str_replace(' ','+',$CityRows->country);
		}else{
			$Country=" ";
		}
		
		//echo $CityRows->longitude;
		?>
		
		
				<div class="post-slide">
                    <a href="property?city=<?php echo $Cityname.$StateName.$Country; ?>">
                        <?php if (($CityRows->citythumb != '') && (file_exists ( 'images/city/' . $CityRows->citythumb ))) { ?>
                        <img src="images/city/<?php echo trim(stripslashes($CityRows->citythumb)); ?>" alt="" style="height:290px;">
                        <?php }else{ ?>
                        <img src="images/city/dummyImage.jpg" alt="" style="height:290px;">
                        <?php } ?>
                    </a>
                    
                    <div class="post-title">
                        <a class="light" href="property?city=<?php echo $Cityname; ?>" target="_blank"><?php echo trim(stripslashes($CityRows->name)); ?></a>
                    </div>                                 
                </div>
				<?php } }?>
				                                   
             <!-- Slide 1-->
            </div>
			
			
        </div>
    </div>
</div>
<div class="clear"></div>


  
<?php
$i=3;
$slider=20;
$j=0;
//print_r($CityDetails); 
foreach($CityDetails->result() as $CityRows){ 

//echo "j now " . $j;


$city_name = $CityRows->name;
if($CityRows->state_name!=''){
	$StateNameLi=",".str_replace(' ','+',$CityRows->state_name);
}else{
	$StateNameLi="";
}

if($CityRows->country!=''){
	$CountryLi=",".str_replace(' ','+',$CityRows->country);
}else{
	$CountryLi="";
}



?>
<script>
$(document).ready(function() {
    $("#news-slider<?php echo $i; ?>").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:false
    });
});
 </script>
 <div class="clear"></div>


<?php if(count($CityName[$city_name]) > 0) { ?>

<div class="cont_sub j1" id="homes_city">
    
<span class="properti-title-left"><h3><?php  if($this->lang->line('Home in') != '') { echo stripslashes($this->lang->line('Home in')); } else echo "Home in"; ?> <?php echo ucfirst($city_name); ?></h3></span>

<span class="properti-title-right">
<a href="property?city=<?php echo $city_name.$StateNameLi.$CountryLi;  ?>" target="_blank"><?php if($this->lang->line('See_all') != '') { echo stripslashes($this->lang->line('See_all')); } else echo "See all"; ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
</span>



    <div class="row">
         <div class="col-md-12 mic" id="col_marg">
            <div id="news-slider<?php echo $i; ?>" class="owl-carousel">
               
				<!-- Slide 1-->

<?php foreach($CityName[$city_name] as $CityRowss) {
	
?>
				<div class="post-slide">
                    <a href="<?php echo base_url(); ?>rental/<?php echo $CityRowss->id; ?>">
					
					
					<?php 
								$base =base_url();
								$url=getimagesize($base.'server/php/rental/'.$CityRowss->product_image);
								if(!is_array($url))
								{
								  $img="1"; //no
								}
								else {
								  $img="0";  //yes
								}
								//To Check whether the image is exist in Local Directory..
								?>  
									
								<?php if ($CityRowss->product_image  != '' && $img=='0') { ?>
								 	<img src="<?php echo base_url();?>server/php/rental/<?php echo $CityRowss->product_image; ?>" alt="RentalImage">
								<?php }else {  ?>
									<img src="<?php echo base_url();?>server/php/rental/dummyProductImage.jpg" alt="RentalImage">
								<?php } ?>
								

					
					</a>
                    
                    <div class="post-title">
                        <span style="font-weight:bold;">
						 
						<?php //echo $CityRowss->price; 
						if($CityRowss->currency != $this->session->userdata('currency_type'))
						  {
                            echo $currencySymbol;
							
					echo convertCurrency($CityRowss->currency,$this->session->userdata('currency_type'),$CityRowss->price);
		
						 }
						 else{
                            echo $currencySymbol;
							
							// echo $CityRowss->price;
							
							   $price=$CityRowss->price;
							 
							
							echo number_format($price,2);

						 }
						
						?>
						<?php echo $this->session->userdata('currency_type');?>
						
						</span>
						<p style="display:inline; text-align:right;" class="par">
						<a style="overflow: auto; float: none;" href="<?php echo base_url(); ?>rental/<?php echo $CityRowss->product_id; ?>" title="<?php echo $CityRowss->product_title; ?>">
						
						<?php
						//echo $CityRowss->product_title;
	$cityTitle=$CityRowss->product_title;
	
									
	if (strlen($cityTitle) > 20){
	
   $citTitle = substr($cityTitle, 0, 32) . '...';
	}else{
		
   $citTitle =$cityTitle;
	}
echo $citTitle;


						?> 
						
					
						</a>
						</p>
						<br>
         <?php 	
					
					$avg_val=round($CityRowss->avg_val);
					$num_reviewers=$CityRowss->num_reviewers;
			?>
						
						<label class="stars">
						<span class="review_img">
							<span class="review_st" style="width:<?php echo ($avg_val * 20); ?>%"></span>
						</span>
						<span class="rew"><?php echo $num_reviewers; ?> <?php if($this->lang->line('Reviews') != '') { echo stripslashes($this->lang->line('Reviews')); } else echo "Reviews"; ?></span>
						</label>
					
					

                    </div>                                 
                </div>
<?php } //foreach propertyRows


 ?>
				
			
			
        </div>
    </div>
</div>
</div>
<?php }	?>



<div class="clear"></div>
<!-- End  Slider2-->

<?php 


//$sel_featuredExpType = "SELECT * FROM ".EXPERIENCE_TYPE." WHERE  featured = 1 and status='Active' limit " . "3" . ", 1";
$sel_featuredExpType = "SELECT * FROM ".EXPERIENCE_TYPE." WHERE  featured = 1 and status='Active' limit " . $j . ", 1";
$featuredExperiencesType = $this->landing_model->ExecuteQuery($sel_featuredExpType);
//echo "query is";echo $this->db->last_query();
//echo "result  is";print_r($featuredExperiencesType->result());


$exp_type_id=$featuredExperiencesType->row()->id;
//echo  "cat_id " . $exp_type_id;



if ($exp_type_id!=''){

$get_featured_all = "select exp.*,exp.experience_title as exp_title,et.id as e_type_id,et.experience_title,ph.product_image , (select IFNULL(count(R.id),0) from ".EXPERIENCE_REVIEW." as R where R.product_id= exp.experience_id and R.status='Active') as num_reviewers , (select IFNULL(avg(Rw.total_review),0) from ".EXPERIENCE_REVIEW." as Rw where Rw.product_id= exp.experience_id and Rw.status='Active') as avg_val from ".EXPERIENCE." as exp left join ".EXPERIENCE_PHOTOS." as ph on ph.product_id=exp.experience_id inner join " . EXPERIENCE_TYPE." as et on et.id=exp.type_id LEFT JOIN  ".EXPERIENCE_DATES." d  on d.experience_id=exp.experience_id  where exp.status='1' and exp.type_id = ". $exp_type_id .  " and  d.from_date >'".date('Y-m-d')."' and exp.status='1' AND EXISTS
      ( select c.id FROM fc_experience_dates c where c.status='0' and c.experience_id=exp.experience_id
      )  AND EXISTS (select count(td.id) FROM fc_experience_time_sheet td where td.status='1' and td.experience_id=exp.experience_id) group by exp.experience_id order by exp.added_date desc ";

$Cat_Type[$exp_type_id] = $this->landing_model->ExecuteQuery($get_featured_all);
}
//echo "resQuery".$this->db->last_query();
//print_r($Cat_Type[$exp_type_id]->result());



//if($experienceExistCount>0){

    if($Cat_Type[$exp_type_id]->num_rows > 0){
//echo "numrowssss " . $Cat_Type[$exp_type_id]->num_rows;
            ?>
            <script>
            $(document).ready(function() {
                $("#news-slider<?php echo $slider; ?>").owlCarousel({
                    items : 5,
                    itemsDesktop:[1199,3],
                    itemsDesktopSmall:[980,2],
                    itemsMobile : [600,1],
                    navigation:true,
                    navigationText:["",""],
                    pagination:true,
                    autoPlay:false
                });
            });
             </script>
             <div class="clear"></div>
            <div class="cont_sub mm" id="homes_city">

			
			<span class="properti-title-left"><h3> <?php if($this->lang->line('experiences_in') != '') { echo stripslashes($this->lang->line('experiences_in')); } else echo "Experiences in"; ?><?php echo " ".  $Cat_Type[$exp_type_id]->row()->experience_title; ?> </h3></span>
			<span class="properti-title-right"><a href="<?php echo base_url(); ?>explore_experience"><?php if($this->lang->line('See_all') != '') { echo stripslashes($this->lang->line('See_all')); } else echo "See all"; ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            <!--<h3> Featured Experience Cat  <?php //echo $j; ?></h3>-->

                <div class="row">
                     <div class="col-md-12" id="col_marg">
                        <div id="news-slider<?php echo $slider; ?>" class="owl-carousel">
                            
                            <!-- Slide 1-->
            <?php foreach ($Cat_Type[$exp_type_id]->result() as $experience) {
			
			//print_r($Cat_Type[$exp_type_id]->result());
 
                $experience_currency =  $experience->currency;
                $experience_price = $experience->price;
				//echo $experience->product_image;

                //$path = 'server/php/experience/'.$experience->product_image;
                
				if($experience->product_image !='' && file_exists('server/php/experience/'.$experience->product_image)){

					$ImgSrc=$experience->product_image;

				}else{

					$ImgSrc='dummyProductImage.jpg';

				}

            ?>
                            <div class="post-slide">
							
							
                                <a href="<?php echo base_url(); ?>view_experience/<?php echo $experience->experience_id; ?>"><img src="<?php echo base_url();?>server/php/experience/<?php echo $ImgSrc; ?>" alt="" style="height: 290px;"></a>
								
								
								
                                
                                <div class="post-title">
                                    <span style="font-weight:bold;">
                                     
                                    <?php //echo $CityRowss->price; 
                                    if($experience_currency!= $this->session->userdata('currency_type'))
                                      {
                                        echo $currencySymbol;
										
                                        echo  convertCurrency($experience_currency,$this->session->userdata('currency_type'),$experience_price);
			
                                     }
                                     else{
                                        echo $currencySymbol;
										
                                        // echo $experience_price;
									   
                                        $priceEx= $experience_price;
										 
										 //echo  custom_number_format($priceEx,2,'.');
										 echo number_format($priceEx,2);
										 
                                     }
                                    
                                    ?>
                                    <?php echo $this->session->userdata('currency_type');?>
                                    
                                    </span>
                                    <p style="display:inline; text-align:right;" class="par">
                                    <a style="overflow: auto; float: none;" href="<?php echo base_url(); ?>view_experience/<?php echo $experience->experience_id; ?>" title="<?php echo $experience->exp_title; ?>"> <?php
$str=$experience->exp_title;
									
	if (strlen($str) > 10)
   $str = substr($str, 0, 10) . '...';

									//echo  $experience->exp_title;

echo $str;									?> 
                                    
                                    </a>
                                    </p>
                                    <br>

                    <?php 	
					
					$avg_val=round($experience->avg_val);
					$num_reviewers=$experience->num_reviewers;
				?>
						<label class="stars">
						<span class="review_img">
							<span class="review_st" style="width:<?php echo ($avg_val * 20); ?>%"></span>
						</span>
						<span class="rew"><?php echo $num_reviewers; ?> <?php if($this->lang->line('Reviews') != '') { echo stripslashes($this->lang->line('Reviews')); } else echo "Reviews"; ?></span>
						</label>
						

                                </div>                                 
                            </div>
            <?php } ?>
                            
                        
                        
                    </div>
                </div>
            </div>
            </div>

            <div class="clear"></div>
            <!-- End  Slider2-->

 <?php 
 } //count of cat_type
 //}
 


//}//citycount

$slider++;
$i++;
$j++;
} //foreach city featured

 //echo "i iss " . $i;?>
<div class="clear"></div>

<!-- End  Slider3-->


<!-- Additional Module Listing (Experience listing) -24/07/2017 malar -->

<?php 

if($experienceExistCount>0){
   // echo "Experience slider";
    if($featuredExperiences->num_rows>0){
  
            ?>
            <!-- Slider3-->

             <script>
            $(document).ready(function() {
                $("#news-slider<?php echo $i; ?>").owlCarousel({
                    items : 3,
                    itemsDesktop:[1199,3],
                    itemsDesktopSmall:[980,2],
                    itemsMobile : [600,1],
                    navigation:true,
                    navigationText:["",""],
                    pagination:true,
                    autoPlay:false
                });
            });
             </script>
			 
			 
            <div class="cont_sub" id="homes_city">
            <h3><?php // echo $num_reviewers; ?> <?php if($this->lang->line('Featured_Experiences') != '') { echo stripslashes($this->lang->line('Featured_Experiences')); } else echo "Featured Experiences"; ?> </h3>

                <div class="row">
                    <div class="col-md-12" id="col_marg">
                        <div id="news-slider2" class="owl-carousel">
                            <?php 
							
							
							foreach ($featuredExperiences->result() as $experience)  {
                                $cur_Date = date('Y-m-d');
                                $sel_price = "select min(price) as min_price,currency from ".EXPERIENCE_DATES." where experience_id ='".$experience->experience_id."' and status='1' and from_date>'".$cur_Date."'";
                                $priceData = $this->landing_model->ExecuteQuery($sel_price);

                                if($priceData->num_rows()>0){
                                    $experience_currency = $priceData->row()->currency;
                                    $experience_price = $priceData->row()->min_price;
                                }else {
                                    $experience_currency = $this->session->userdata('currency_type');
                                    $experience_price = 0;
                                }

                                $experience_currency =  $experience->currency;
                                $experience_price = $experience->price;

                            ?>
                            <!-- Slide 1-->
                            <div class="post-slide">
							
							
							
							<?php 
								$base =base_url();
								$url=getimagesize($base.'server/php/experience/'.$experience->product_image);
								if(!is_array($url))
								{
								  $img="1"; //no
								}
								else {
								  $img="0";  //yes
								}
								//To Check whether the image is exist in Local Directory..
							?>  
									
								<?php if ($experience->product_image != '' && $img=='0') { ?>
								 	<a href="<?php echo base_url(); ?>view_experience/<?php echo $experience->experience_id; ?>"><img src="<?php echo base_url();?>server/php/experience/<?php echo $experience->product_image; ?>" alt="Experience"></a>
								<?php }else {  ?>

								<a href="<?php echo base_url(); ?>view_experience/<?php echo $experience->experience_id; ?>"><img src="<?php echo base_url();?>server/php/experience/dummyProductImage.jpg" alt="Experience"></a>
		
								<?php } ?>
								

                                
                                <div class="post-title">
                                <span style="font-weight:bold">
                                   <?php  //echo $currencySymbol; ?> 
                                   
                                    <?php //echo $CityRowss->price; 
                                    if($experience_currency != $this->session->userdata('currency_type'))
                                      {
                                        echo $currencySymbol;
										
                                    echo  convertCurrency($experience_currency,$this->session->userdata('currency_type'),$experience_price);
								   
                                   
									
									 
                                     }
                                     else{
                                            echo $currencySymbol;
											
											
                                        // echo $experience_price;
										
										
                                         $priceExp= $experience_price;

										//echo "fun". custom_number_format($priceExp,2,'.');
										echo number_format($priceExp,2);
										
                                     }
                                     ?>
                                    <?php echo $this->session->userdata('currency_type');?>
                                    
                                    </span>
                                    
                                    <p style="display:inline; text-align:right;" class="par">                       
                                    <a href="<?php echo base_url(); ?>explore_experience/<?php echo $experience->experience_id; ?>" title="<?php echo $experience->experience_title; ?>"> 
                                    <?php
									
									//echo $experience->experience_title;
									
								$str=$experience->experience_title;						
								if (strlen($str) > 10){
							   echo substr($str, 0, 10) . '...';
								}else{
									echo  $experience->experience_title;
								}

									?>
                                    </a>
                                    </p>
                                    <br>

							
						<?php 
						$avg_val=round($experience->avg_val);
						$num_reviewers=$experience->num_reviewers;

						?>
						
						<label class="stars">
						<span class="review_img">
							<span class="review_st" style="width:<?php echo ($avg_val * 20); ?>%"></span>
						</span>
						<span class="rew"><?php echo $num_reviewers; ?> <?php if($this->lang->line('Reviews') != '') { echo stripslashes($this->lang->line('Reviews')); } else echo "Reviews"; ?></span>
						</label>
				
			   
                                </div>                                 
                            </div>
                            <?php } ?>
                            
                        
                        
                    </div>
                </div>
            </div>

            </div>
            <?php 
			
            $i++;
            
       
    }

}


?>

<!-- Additional Module Listing (Experience listing) -24/07/2017 malar -->





  <!-- Container Fluid-->    
<?php 
		$this->db->select('*');
        $this->db->from(ADVERTISMENT);
        $this->db->where('status','Active');
        $result = $this->db->get();
        $adv_result = $result->result();

?>
<?php 
if(count($adv_result) > 0){
foreach($adv_result as $data){ ?>
<div class="row">





</div>
<?php } }?>
</div>
<div class="clear"></div>
  <!-- Container-Fluid End-->    
  
  
   
  
 <!--Content Column Started-->
<div class="clear"></div>
<?php 
		$this->db->select('*');
        $this->db->from(PREFOOTER);
        $this->db->where('status','Active');
        $result = $this->db->get();
        $prefooter_result = $result->result();

?>
<div class="page-container">
<?php 
$i = 1;
foreach($prefooter_result as $pre_data){ ?>
<div class="col-container">

<div class="row_col">
<div class="row_sub">

<div class="col-sm-4" id="col<?php echo $i;?>"><div class="outer_layer"><div class="icon_layer"> <img src="<?php echo base_url(); ?>images/prefooter/<?php echo $pre_data->image; ?>" alt="" style="fill: currentColor;height: 33px;width: 33px;display: block;overflow: hidden;"></div>

<div class="text_layer">
<div class="text_head">
<?php echo $pre_data->footer_title; ?></div>
<p><?php echo $pre_data->description; ?></div></div></div>


</div>
</div>

</div>
<?php $i++; } ?>
</div>


<!-- <div class="page-container">
<div class="col-container">
<div class="row_col">
<div class="row_sub">
<div class="col-sm-4" id="col1"><div class="outer_layer"><div class="icon_layer"> <img src="images/slider/ph.png" alt="" style="fill: currentColor;height: 33px;width: 33px;display: block;overflow: hidden;"></div>

<div class="text_layer">
<div class="text_head">
24/7 Customer Support</div>
<p>If you need help while traveling or hosting, contact us at our toll free number: 000 111 103</div></div></div></div>


<div class="col-sm-4" id="col2"><div class="outer_layer"><div class="icon_layer"> <img src="images/slider/guar.png" alt="" style="fill: currentColor;height: 33px;width: 33px;display: block;overflow: hidden;"></div>

<div class="text_layer">
<div class="text_head">6,00,00,000 Host Guarantee</div>
<p>Hosts are protected against property damages for up to ₹6,00,00,000.<a class="read_more" href=""> Learn more..</a></div></div></div>


<div class="col-sm-4" id="col3"><div class="outer_layer"><div class="icon_layer"> <img src="images/slider/id.png" alt="" style="fill: currentColor;height: 33px;width: 33px;display: block;overflow: hidden;"></div>

<div class="text_layer">
<div class="text_head">
Verified ID</div>
<p>We aim to build a trusted community by giving you more info when you're <a class="read_more" href="">Read more..</a></div></div></div>




</div>
</div>
</div> -->


<!--Content Column Ended-->
 
 <!---

<section>

<div class="center-page">

	<div class="container">
		<div class="top-title-structure">
		<h2 class="find-a-place">
		
		<?php 
		if($adminList->home_title_3 != ''){
			echo $adminList->home_title_3;
		}
		else{
		if($this->lang->line('ExploretheWorld') != '') { echo stripslashes($this->lang->line('ExploretheWorld')); } else echo "Explore the World"; } ?>
		
		</h2>
		<span class="discover-place">
		
		<?php 
		if($adminList->home_title_4 != ''){
			echo $adminList->home_title_4;
		}
		else{
		if($this->lang->line('Seewherepeoplearetraveling') != '') { echo stripslashes($this->lang->line('Seewherepeoplearetraveling')); } else echo "See where people are traveling, all around the world."; } ?>
		
		</span>

	    </div>

	    <ul class="hme-container">

<?php if($CityDetails->result() > 0){ 

		$i = 1;

		foreach($CityDetails->result() as $CityRows){
		$Cityname=str_replace(' ','+',$CityRows->name);
		?>

        <li class="col-md-<?php if ($i%10 == 1 || $i%10 == 7)echo "8"; else echo "4"; $i++;?>">

		<a href="property?city=<?php echo $Cityname; ?>">

         	<div class="image-container">

         		<img src="images/city/<?php echo trim(stripslashes($CityRows->citythumb)); ?>">

         	</div>

         	<div class="overlay-text">
				<span><?php echo trim(stripslashes($CityRows->name)); ?></span>
        	</div>
			</a>

		 </li>

		 <?php } }?>
  </ul>

</div>

</div>

</section>

-->


  
 
 <script>
$(document).ready(function() {
    $("#news-slider1").owlCarousel({
        items : 5,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:false
    });
});
 </script>
 
 
 <script>
$(document).ready(function() {
    $("#news-slider2").owlCarousel({
        items : 5,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:false
    });
});
 </script>
 

 
 <script>
$(document).ready(function() {
    $("#news-slider13").owlCarousel({
        items : 5,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:false
    });
});
 </script>
 
 
 <script>
$(document).ready(function() {
    $("#news-slider4").owlCarousel({
        items : 5,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:false
    });
});
 </script>
 
 <script>
$(document).ready(function() {
    $("#news-slider3").owlCarousel({
        items : 5,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:false
    });
});
 </script>
 
 <script>
function myFunction() {
    var x = document.getElementById("togg_bar");
    if (x.className === "nav_bar") {
        x.className += "responsive";
    } else {
        x.className = "nav_bar";
    }
}
</script>

<script type="text/javascript">
	// property search validation
	function property_search()
	{
		
		var language_code = document.getElementById('language_code').value;
		
		var city = document.getElementById('autocompleteNewMobile').value;
		
		if(city =="" || city =="undefined") {
		
				$(".city_error").html("<?php if($this->lang->line('Please set a location!') != '') { echo stripslashes($this->lang->line('Please set a location!')); } else echo "Please set a location!";?>");
				return false;
		}
		
		document.getElementById("property_search_form").submit();
		
	}
	$("#autocompleteNewMobile").focus(function() {
		$('.city_error').html('');
	});
	// property search validation for mobile
	function property_search_mob()
	{
		
		var city = document.getElementById('autocompleteNew').value;
		
		if(city =="" || city =="undefined") {
			$(".city_error_mob").html("<?php if($this->lang->line('Please set a location!') != '') { echo stripslashes($this->lang->line('Please set a location!')); } else echo "Please set a location!";?>");
			return false;
		}
		document.getElementById("property_search_form_mob").submit();
		
	}
	$("#autocompleteNew").focus(function() {
		$('.city_error_mob').html('');
	});


	</script>

	         

<!--
                    <script type="text/javascript">$('#textRangeFrom').datePicker({ minDate: 0, monthCount: 2, range: '#textRangeTo',});

					$('#textRange1').datePicker({
    minDate: 0,
    monthCount: 3,
    range: ['#textRange2', '#textRange3', '#textRange4'],
    disabled: function(moment) {
        return moment.date() % 8 == 0;
    }
});
$('#textRangeDisabled1').datePicker({
    minDate: 0,
    monthCount: 3,
    range: ['#textRangeDisabled2', '#textRangeDisabled3'],
    disabled: [
        function(moment) {
            return 10 < moment.date();
        },
        function(moment) {
            return moment.date() < 10 || 20 < moment.date();
        },
        function(moment) {
            return moment.date() < 20;
        }
    ]
});</script>
	
-->
<script>
$(function() {
	$( "#datepicker" ).datepicker({
		minDate: 0,
		changeMonth: true,
		numberOfMonths: 1,
		onClose: function( selectedDate ) {
			$( "#datepicker1" ).datepicker( "option", "minDate", selectedDate );
			if($("#datepicker").val()!="") {
				if($("#datepicker1").val()=="") {
					$("#datepicker1").focus();
				}
			}
		}
	});
	$( "#datepicker1" ).datepicker({
		changeMonth: true,
		numberOfMonths: 1,
		onClose: function( selectedDate ) {
			$( "#datepicker" ).datepicker( "option", "maxDate", selectedDate );
		}
	});

	$("#datepicker1").click(function(){
		if($("#datepicker").val()=="")
		$("#datepicker").focus();
	});
});

$(function() { 

$( "#datepicker" ).datepicker({
defaultDate: "+1w",
changeMonth: true,
numberOfMonths: 1,
minDate:0,
onClose: function( selectedDate ) {
  if($( "#datepicker1" ).val()==''){
    $( "#datepicker1" ).datepicker( "option", "maxDate", selectedDate ).focus();
  }else{
    $( "#datepicker1" ).datepicker( "option", "maxDate", selectedDate );
  }
}
});
$( "#datepicker1" ).datepicker({
defaultDate: "+1w",
changeMonth: true,
numberOfMonths: 1,
minDate:0,
onClose: function( selectedDate ) {

if($( "#datepicker" ).val()==''){
$( "#datepicker" ).datepicker( "option", "maxDate", selectedDate ).focus();
}else{
$( "#datepicker" ).datepicker( "option", "maxDate", selectedDate );
}
}
});

});

</script>

<script>
// For mobile
$(function() {
	$( "#datepicker_mob" ).datepicker({
		minDate: 0,
		changeMonth: true,
		numberOfMonths: 1,
		onClose: function( selectedDate ) {
			$( "#datepicker_mob1" ).datepicker( "option", "minDate", selectedDate );
			if($("#datepicker_mob1").val()=="")
			$("#datepicker_mob1").focus();
		}
	});
	$( "#datepicker_mob1" ).datepicker({
		changeMonth: true,
		numberOfMonths: 1,
		onClose: function( selectedDate ) {
			$( "#datepicker_mob" ).datepicker( "option", "maxDate", selectedDate );
		}
	});

	$("#datepicker_mob1").click(function(){
		if($("#datepicker_mob").val()=="")
		$("#datepicker_mob").focus();
	});
});

$(function() { 

$( "#datepicker_mob" ).datepicker({
defaultDate: "+1w",
changeMonth: true,
numberOfMonths: 1,
minDate:0,
onClose: function( selectedDate ) {
  if($( "#datepicker_mob1" ).val()==''){
    $( "#datepicker_mob1" ).datepicker( "option", "maxDate", selectedDate ).focus();
  }else{
    $( "#datepicker_mob1" ).datepicker( "option", "maxDate", selectedDate );
  }
}
});
$( "#datepicker_mob1" ).datepicker({
defaultDate: "+1w",
changeMonth: true,
numberOfMonths: 1,
minDate:0,
onClose: function( selectedDate ) {

if($( "#datepicker_mob" ).val()==''){
$( "#datepicker_mob" ).datepicker( "option", "maxDate", selectedDate ).focus();
}else{
$( "#datepicker_mob" ).datepicker( "option", "maxDate", selectedDate );
}
}
});

});

</script>


<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
/*window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?3s5EyzVMQR2UgRyXxBY2QMNzgNC91ak1";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");*/
</script>
<!--End of Zendesk Chat Script-->




<?php 
 $this->load->view('site/templates/footer');
?>