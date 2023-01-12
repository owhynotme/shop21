<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Privacy</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>

       .justi{
        text-align: justify;   
        }
        .psize{
            font-size: 15px;
        }
        .lsize{
            font-size: 13px;
            margin-left: 4%;
            padding: 1%;
        }


        [data-custom-class='body'], [data-custom-class='body'] * {
          background: transparent !important;
        }
[data-custom-class='title'], [data-custom-class='title'] * {
          font-family: Arial !important;
font-size: 26px !important;
color: #000000 !important;
        }
[data-custom-class='subtitle'], [data-custom-class='subtitle'] * {
          font-family: Arial !important;
color: #595959 !important;
font-size: 14px !important;
        }
[data-custom-class='heading_1'], [data-custom-class='heading_1'] * {
          font-family: Arial !important;
font-size: 19px !important;
color: #000000 !important;
        }
[data-custom-class='heading_2'], [data-custom-class='heading_2'] * {
          font-family: Arial !important;
font-size: 17px !important;
color: #000000 !important;
        }
[data-custom-class='body_text'], [data-custom-class='body_text'] * {
          color: #595959 !important;
font-size: 14px !important;
font-family: Arial !important;
        }
[data-custom-class='link'], [data-custom-class='link'] * {
          color: #3030F1 !important;
font-size: 14px !important;
font-family: Arial !important;
word-break: break-word !important;
        }
    </style>

</head>
<body>
   
<?php include 'header.php'; ?>
<div style="margin-top: 2%;"></div>

<div><center><p style="font-size: 35px; font-weight:500;">Return Policy</p></center></div>

<div style="text-align:justify; width:45%; margin-left:27%; ">

<!-- <br>
<br>
<br>
<center><p class="psize">Welcome to shop21!</p></center>
<br>
<br> -->

      <div data-custom-class="body">
      <div><div align="center" class="MsoNormal" style="text-align:center;line-height:115%;"><a name="_2cipo4yr3w5d"></a><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><strong><span style="font-size: 26px;"></span></strong></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><strong><span data-custom-class="subtitle">Last updated <bdt class="question">January 11, 2023</bdt></span></strong></span></span></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><br></div><div align="center" class="MsoNormal" style="text-align: left; line-height: 150%;"><span style="font-size: 15px;"><br><a name="_2cipo4yr3w5d"></a></span></div></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);"><bdt class="block-component"></bdt>Thank you for your purchase. We hope you are happy with your purchase. However, if you are not completely satisfied with your purchase for any reason, you may return it to us for <bdt class="block-container if" data-type="if" id="03b751bb-5eee-5230-df87-d0707fec3124"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="policy_type" data-type="statement"></bdt><bdt data-type="body">a full refund or an exchange</bdt></bdt><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="policy_type" data-type="statement"></bdt></bdt>. Please see below for more information on our return policy.</span></div></div><div style="line-height: 1.5;"><br></div><div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 115%;"><a name="_iwimutmowezb"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">RETURNS</span></strong></div></div><div style="line-height: 1.5;"><br></div><div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);">All returns must be postmarked within <bdt class="block-container question question-in-editor" data-id="10b33c27-be1f-aeda-7ea3-7c1f52ee6130" data-type="question">seven (7)</bdt> days of the purchase date. All returned items must be in new and unused condition, with all original tags and labels attached.</span></div></div><div style="line-height: 1.5;"><br></div><div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_16t1v96tankw"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">RETURN PROCESS</span></strong></div></div><div style="line-height: 1.5;"><br></div><div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);">To return an item, <bdt class="block-container if" data-type="if" id="51c4b423-789c-79e6-4161-743acb653a2d"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="authorization_option" data-type="statement"></bdt><bdt data-type="body">please email customer service at <bdt class="block-container question question-in-editor" data-id="0b78538e-7550-6c62-669a-d2eb2ed0eafb" data-type="question">shop21@gmail.com</bdt> to obtain a Return Merchandise <bdt class="block-component"></bdt>Authorization<bdt class="statement-end-if-in-editor"></bdt> (RMA) number. After receiving a RMA number, </bdt></bdt><bdt class="statement-end-if-in-editor" data-type="close"></bdt></bdt>place the item securely in its original packaging<bdt class="block-container if" data-type="if" id="903ce2af-7990-07ea-2615-36e36315d483"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="return_inlcude_option" data-type="statement"></bdt><bdt data-type="body">, and</bdt></bdt><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="null" data-type="statement"></bdt></bdt> mail your return to the following address:</span></div><div class="MsoNormal" style="line-height: 1.1;"><span style="font-size: 15px;"><span style="line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);"><br></span></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 115%;"><span style="font-size: 15px;"><span style="line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);"><bdt class="block-container question question-in-editor" data-id="49265208-ebd3-4d63-5ecb-9fcda064a7d5" data-type="question">__________</bdt><br></span></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span style="line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);">Attn: Returns</span></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span style="line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);"><bdt class="block-container if" data-type="if" id="2e485380-f516-a019-540b-f82bd718b0df"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="authorization_option" data-type="statement"></bdt><bdt data-type="body">RMA #</bdt></bdt><bdt class="statement-end-if-in-editor" data-type="close"></bdt></bdt></span></span></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><bdt class="block-container question question-in-editor" data-id="22673e85-8c82-1948-b0e9-b16dd7c6f007" data-type="question">__________</bdt></span></span><bdt class="block-component"></bdt></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span style="line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);"><bdt class="block-container question question-in-editor" data-id="765d45c0-0386-b367-b58a-832b154c7ee8" data-type="question">__________</bdt>, <bdt class="block-component"></bdt> <bdt class="block-container question question-in-editor" data-id="85b0476b-4b2d-4b3d-060f-fc67c287cbe7" data-type="question">__________</bdt><bdt class="block-component"></bdt></span></span></div></div><div style="line-height: 1.1;"><br></div><div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);"><bdt class="block-container if" data-type="if" id="b7518b5d-84c0-c06e-ad97-c7421eb67b0b"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="shipping_fee_option" data-type="statement"></bdt></bdt><bdt class="block-container if" data-type="if" id="d3f0beb2-1468-a072-da09-6936c6e877e2"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="shipping_fee_option" data-type="statement"></bdt></bdt><bdt class="block-container if" data-type="if" id="48a0f62a-d42f-f443-061d-cbbf93b49154"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="shipping_fee_option" data-type="statement"></bdt><bdt data-type="body">Return shipping charges will be paid or reimbursed by us. </bdt></bdt><bdt class="statement-end-if-in-editor" data-type="close"></bdt></bdt><bdt class="block-container if" data-type="if" id="ac6ab4e0-da32-a003-8324-04d8b43cb50c"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="shipping_fee_option" data-type="statement"></bdt></bdt></span></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_qxq7t4ufn5pr"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">REFUNDS</span></strong></div><div class="MsoNormal" style="line-height: 115%;"><a name="_kcap2nw8xg2p"></a></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);">After receiving your return and inspecting the condition of your item, we will process your <bdt class="block-container if" data-type="if" id="4c11860e-4346-687b-5cb3-3727f319e194"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="policy_type" data-type="statement"></bdt><bdt data-type="body">return or exchange</bdt></bdt><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="policy_type" data-type="statement"></bdt></bdt>. Please allow at least <bdt class="block-container question question-in-editor" data-id="ab10b1ab-f4a1-256f-29ae-65257d891371" data-type="question">three (3)</bdt> days from the receipt of your item to process your <bdt class="block-container if" data-type="if" id="4c11860e-4346-687b-5cb3-3727f319e194" style="font-size: 14.6667px;"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="policy_type" data-type="statement"></bdt><bdt data-type="body">return or exchange</bdt></bdt><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="policy_type" data-type="statement"></bdt></bdt>.<bdt class="block-container if" data-type="if" id="16f989a0-873e-9d7c-70f2-1c4b9cc7ecc4"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="policy_type" data-type="statement"></bdt></bdt><bdt class="block-container if" data-type="if" id="b49c01dc-6b19-275b-5996-06e6aeaaf917"><bdt data-type="conditional-block"><bdt class="block-component" data-record-question-key="customer_notification_option" data-type="statement"></bdt><bdt data-type="body"> We will notify you by email when your return has been processed.</bdt></bdt></bdt><bdt class="block-container if" data-type="if" id="b49c01dc-6b19-275b-5996-06e6aeaaf917"><bdt class="statement-end-if-in-editor" data-type="close"></bdt></bdt></span></div><div class="MsoNormal" style="line-height: 115%;"><a name="_gjdgxs"></a></div><div class="MsoNormal" style="line-height: 1.5;"><br></div><div class="MsoNormal" data-custom-class="heading_1" style="line-height: 1.5;"><a name="_33ujiidflcnn"></a><strong><span style="line-height: 115%; font-family: Arial; font-size: 19px;">EXCEPTIONS</span></strong><span style="font-size: 15px;"><bdt class="block-component"></bdt><bdt class="block-component"></bdt></span></div><div data-custom-class="body_text" data-empty="true" style="line-height: 1.1;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><br></span></span></div><div data-custom-class="body_text" style="line-height: 1.5;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;">For defective or damaged products, please contact us at the contact details below to arrange a refund or exchange.</span></span></div><div data-custom-class="body_text" data-empty="true" style="line-height: 1.5;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></span></div><div data-custom-class="body_text" data-empty="true" style="line-height: 1.1;"><br></div><div data-custom-class="body_text" data-empty="true" style="line-height: 1.5;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><strong>Please Note</strong></span></span></div><div data-custom-class="body_text" data-empty="true" style="line-height: 1.5;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><bdt class="statement-end-if-in-editor"></bdt></span></span><span style="font-size: 15px;"><bdt class="block-component"><span style="color: rgb(89, 89, 89);"></bdt></span><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></span></div><div data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><strong style="font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><span style="font-size: 13px; color: rgb(89, 89, 89);">     <strong style="font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);"><span style="color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important;">● </span></strong>    </span></strong>Sale items are FINAL SALE and cannot be returned.<bdt class="statement-end-if-in-editor"></bdt><bdt class="block-component"></bdt></span></div><div style="line-height: 1.5;"><br></div><div data-custom-class="heading_1" style="line-height: 1.5;"><span style="font-size: 19px; color: rgb(0, 0, 0);"><strong>QUESTIONS</strong></span></div><div style="line-height: 1.5;"><br></div><div data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);">If you have any questions concerning our return policy, please contact us at:</span></div><div data-custom-class="body_text" style="line-height: 1.1;"><br></div><div data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><bdt class="block-component"></bdt></span></span></div><div data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><bdt class="question">shop21@gmail.com</bdt></span></div><style>
      ul {
        list-style-type: square;
      }
      ul > li > ul {
        list-style-type: circle;
      }
      ul > li > ul > li > ul {
        list-style-type: square;
      }
      ol li {
        font-family: Arial ;
      }
    </style>


</div>

<div style="margin-bottom: 5%;"></div>
<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>