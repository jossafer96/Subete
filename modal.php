
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="global-modal ">
   
   <div class=" modal-transition">
   <?php include("table.php"); ?> 
    
 
</div>


<style>
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html,


.center {
  text-align: center;
}

.block {
  display: block;
}

.credit {
  position: fixed;
  bottom: 10px;
  width: 100%;
  left: 0;
}
.btn-green-flat-trigger{
  border: 1px solid #000000;
    background: yellow;
    font-size: 20px;
    color: #000000;
    /* font-weight: 200; */
    padding: 15px 30px;
    display: inline-block;
    margin: initial;
    margin-top: 19px;
    border-radius: 4px;
    cursor: pointer;
}
.btn-green-flat-trigger:hover{
  text-decoration: none;
    color: yellow;
    background: #000000;
    transition: background 0.9s ease, padding 0.8s linear;
}


.btn-green-flat {
  border: 1px solid #47BA6B;
  background: rgba(0, 0, 0, 0);
  font-size: 20px;
  color: #47BA6B;
  font-weight: 200;
  padding: 10px 28px;
  text-align: center;
  width: 175px;
  display: block;
  margin: 0 auto;
  margin-top: 20px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
  cursor: pointer;
  text-transform: uppercase;
  
}
.btn-green-flat:hover{
  text-decoration: none;
  color: #fff;
  background: #47ba6b;
  transition: background 0.2s ease,
              padding 0.8s linear;
  
}
.overlay {
  background: rgba(255, 255, 255, 0.77);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.global-modal {
  visibility: hidden;
}

.global-modal_contents {
  background: #FFF;
  -webkit-box-shadow: 0 0 8px 2px rgba(182, 182, 182, 0.75);
  -moz-box-shadow: 0 0 8px 2px rgba(182,182,182, 0.75);
  -o-box-shadow: 0 0 8px 2px rgba(182,182,182,0.75);
  box-shadow: 0 0 8px 2px rgba(182, 182, 182, 0.75);
  width: 50%;
  position: absolute;
  left: 42%;
  margin-left: -16%;
  top: 15%;
  min-height: 450px;
}
.global-modal-header{
  border-bottom: 1px solid #ccc;
}
.global-modal-header h3{
  color: #34495E;
  text-align: center;
  font-weight: bold;
  font-size: 22px;
}
.global-modal-header .mobile-close{
  display: none;
}
.global-modal-header span{
  font-weight: 200;
}
.global-modal-body{
  width: 100%;
}
.global-modal-body p{
  color: #34495E;
  font-size: 16px;
  line-height: 23px;
  text-align: center;
}
.global-modal-body .content-left {
  height: 225px;
  width: 50%;
  position: relative;
  top: 55px;
  float: left;
  border-right: 1px solid #CCC;
}

.global-modal-body .content-right{
  height: 225px;
  width: 50%;
  position: relative;
  top: 55px;
  float: left;
}
.content-right .sponsor-name{
  font-weight: bold;
  color: #000;
}
.global-modal_contents h1 {
  margin: 0;
  padding: 0;
  line-height: 32rem;
  text-align: center;
  display: block;
}

.global-modal_close {
  position: absolute;
  right: 2rem;
  top: 2rem;
  text-decoration: none;
  display: none;
}

.global-modal-show {
  visibility: visible;
}

.global-modal-transition {
  -webkit-transform: scale(0.7);
  -moz-transform: scale(0.7);
  -ms-transform: scale(0.7);
  transform: scale(0.7);
  opacity: 0;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

.global-modal-show .global-modal-transition {
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  opacity: 1;
}

@media (max-width: 1139px){
  .global-modal p{
    text-align: center;
  }
  .global-modal:after {
    clear: both;
    content: '';
    display: table;
  }
  .global-modal-body .content-left{
    width: 80%;
    display:block;
    float: none;
    margin: 0 auto;
    border-right: none;
    border-bottom: 1px solid #ccc;
}
  .global-modal-body .content-right{
    width: 80%;
    display: block;
    margin: 40px auto;
    float: none;
    border-right: none;
  }
}
@media(max-width: 1027px){
  .global-modal-header h3{
    font-size: 18px;
  }
}
@media (max-width : 767px) {
  
  .global-modal_contents {
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    margin: 0;
  }
  .global-modal-header h3{
    font-size: 22px;
  }
  .global-modal-header .mobile-close{
    display: block;
    position: absolute;
    right: 10px;
    top: 10px;
    curson: pointer;
  }
  .global-modal_close {
    display: block;
  }
  
  .global-modal-transition {
    -webkit-transform: translateX(-0) translateY(150%);
    -moz-transform: translateX(-0) translateY(150%);
    -ms-transform: translateX(-0) translateY(150%);
    transform: translateX(-0) translateY(150%);
  }
  
}
@media (max-width: 495px){
  .global-modal-header h3{
    font-size: 18px;
  }
}
@media (max-width: 415px){
  .global-modal-header h3{
    font-size: 15px;
  }
}
</style>

<script>
 var globalModal = $('.global-modal');
    $( ".btn-green-flat-trigger" ).on( "click", function(e) {
      e.preventDefault();
      $( globalModal ).toggleClass('global-modal-show');
    });
    $( ".overlay" ).on( "click", function() {
      $( globalModal ).toggleClass('global-modal-show');
    });
    $( ".global-modal_close" ).on( "click", function() {
      $( globalModal ).toggleClass('global-modal-show');
    });
    $(".mobile-close").on("click", function(){
      $( globalModal ).toggleClass('global-modal-show');
    });
</script>