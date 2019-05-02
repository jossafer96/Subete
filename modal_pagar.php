
    
  
  <div id="open-modal" class="modal-window ">
    <div>
     
     
		


	
<div class="form-container">

</div>
</div>

      </div>
  
  <style>
  .modal-window {
  position: fixed;
  background-color: rgba(255, 255, 255, 0.25);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  opacity: 0;
  pointer-events: none;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}
.modal-window:target {
  opacity: 1;
  pointer-events: auto;
}
.modal-window > div {
  width: 850px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 2em;
  background: #000;
}
.modal-window header {
  font-weight: bold;
}
.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}
.modal-close {
  color: yellow;
  line-height: 150px;
  font-size: 100%;
  font-size: 25px;
  right: 0;
  text-align: center;
  top: 0;
  width: 70px;
  text-decoration: none;
}
.modal-close:hover {
  color: yellow;
}
.long-number::-webkit-input-placeholder { color:black; }
.security-code::-webkit-input-placeholder { color:black; }
/* Demo Styles */

.modal-window div:not(:last-of-type) {
  margin-bottom: 15px;
}
small {
  color: #aaa;
}
.btn {
  background-color: #fff;
  padding: 1em 1.5em;
  border-radius: 3px;
  text-decoration: none;
}
.btn i {
  padding-right: 0.3em;
}


.credit-card-title {
  font-size: 22px;
}
.credit-card-title{
    color: white;
}
.form-container {
  
}
.or {
  text-align: center;
  padding: 0%;
  font-size: 18px;
  color: #fff;
}
.payment-overview {
  position: relative;
  text-align: center;
  background: #000;
  padding: 5%;
  padding-top: 60px;
  -webkit-border-top-left-radius: 5px;
  -webkit-border-bottom-left-radius: 5px;
  -moz-border-radius-topleft: 5px;
  -moz-border-radius-bottomleft: 5px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  float: left;
}
.payment-details {
    padding-top: 0 !important;
  background: #000;
  padding: 5%;
  padding-top: 2%;
  -webkit-border-top-right-radius: 5px;
  -webkit-border-bottom-right-radius: 5px;
  -moz-border-radius-topright: 5px;
  -moz-border-radius-bottomright: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  float: left;
    width: 533px;
}
.preloader {
  font-size: 20px;
  text-align: center;
  position: absolute;
  height: 100vh;
  width: 100%;
  background: #fff;
  z-index: 111;
  font-family: 'Source Sans Pro', sans-serif;
}
.spinner {
  width: 40px;
  height: 40px;
  position: relative;
  margin: 100px auto;
}
.double-bounce1, .double-bounce2 {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #01ad69;
  opacity: 0.6;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-animation: sk-bounce 2s infinite ease-in-out;
  animation: sk-bounce 2s infinite ease-in-out;
}
.double-bounce2 {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}
@-webkit-keyframes sk-bounce {
  0%, 100% {
    -webkit-transform: scale(0);
  }
  50% {
    -webkit-transform: scale(1);
  }
}
@keyframes sk-bounce {
  0%, 100% {
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  50% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}
/* Medium devices (desktops, 992px and up) */
@media screen and (min-width: 768px) {
  .payment-overview {
    height: 400px;
  }
  .payment-details {
    height: 400px;
  }
}
.credit-card-icon {
  float: right;
  font-size: 23px;
}
@media screen and (max-width: 750px) {
  .form-container {
    margin-top: 1%;
  }
  .payment-overview {
    height: auto;
    padding: 5%;
    padding-top: 5%;
   
  }
  .payment-details {
    height: auto;
    padding: 5%;
    
  }
}
.product-payment {
  font-size: 26px;
  color: white;
}
.price-payment {
  font-size: 50px;
  color: yellow;
}
.long-number {
  width: 100%;
  border: 1px solid #c6c6c6;
  padding: 3%;
}
input {
  color: #9e9fa0;
  border: 0px solid #a6a7ab;
  width: 100%;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
  /* display: none; <- Crashes Chrome on hover */
  -webkit-appearance: none;
  margin: 0;
  /* <-- Apparently some margin are still there even though it's hidden */
}
textarea:focus, input:focus, select:focus {
  outline: none;
}
.security-code {
  width: 25%;
  border: 1px solid #c6c6c6;
  padding: 3%;
  margin-top: 3%;
}
.security-code-p {
  width: 75%;
  padding: 7%;
  padding-top: 5%;
  font-size: 12px;
  float: right;
  color: white;
  margin: 0 0 0px;
  text-align: start;
}
.year-select {
  color: #9e9fa0;
  width: 38%;
  margin-left: 2%;
  border: 1px solid #c6c6c6;
  padding: 3%;
  text-align: center;
}
.month-select {
  color: #9e9fa0;
  width: 58%;
  border: 1px solid #c6c6c6;
  padding: 3%;
}
.proceed-button {
  background: yellow;
  width: 100%;
  padding: 4%;
  border: 0px solid green;
  color: #000;
  font-size: 20px;
  letter-spacing: 1px;
  font-weight: 700;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.paypal-button {
  background: yellow;
  width: 100%;
  padding: 5%;
 
  color: #000;
  font-size: 20px;
  letter-spacing: 1px;
  font-weight: 700;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.paypal-icon {
  font-size: 22px;
  color: #fff;
}
select {
  /* styling */
  background-color: white;
  border: thin solid blue;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;
  /* reset */
  margin: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}
input[type=number]::-webkit-outer-spin-button, input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
select.minimal {
  background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), linear-gradient(to right, #ccc, #ccc);
  background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - 2.5em) 0.5em;
  background-size: 5px 5px, 5px 5px, 1px 1.5em;
  background-repeat: no-repeat;
}
select.minimal:focus {
  background-image: linear-gradient(45deg, green 50%, transparent 50%), linear-gradient(135deg, transparent 50%, green 50%), linear-gradient(to right, #ccc, #ccc);
  background-position: calc(100% - 15px) 1em, calc(100% - 20px) 1em, calc(100% - 2.5em) 0.5em;
  background-size: 5px 5px, 5px 5px, 1px 1.5em;
  background-repeat: no-repeat;
  border-color: green;
  outline: 0;
}
select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}
input[type=number] {
  -moz-appearance: textfield;
}

  </style>
   
  