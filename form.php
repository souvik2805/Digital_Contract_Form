<!DOCTYPE html>
<html lang="en">
<head>
  <title>CrispDigital Php Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/validationEngine.jquery.css">
  <link rel="stylesheet" href="assets/css/bootstrap4-toggle.min.css">
 
</head>
<body>

<div class="container">
     <div class="card">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">

          <li class="nav-item">
               <a class="navbar-brand" href="#">
               <img src="assets/image/crisp-logo.png" class="logo" alt="logo" width="120" height="100" >
               </a>
          </li>
          <li class="nav-item">
            <div class="nav-link" href="#" style="padding:0px;">
              <ul class="list-unstyled" style="color: black;">
                <li>Crisp Digital India Private Limited</li>
                <li>216 SF, Sushant Tower, Sushant Lok-II</li>
                <li>Gurgaon - 122011, Tel: 0124-4867430</li>
                <li>CIN: U74999HR2017PTC069087</li>
              </ul>
            </div>
          </li>
          <li class="nav-item p-middle">
              <a class="nav-link disabled" href="#">
                <h4 style="text-align: center;color: black;text-shadow: 1px 1px blue;">Online/Digital Services <br>Contract</h4>
              </a>
          </li>
           <li class="nav-item" style="">
              <a class="navbar-brand" href="#">
               <img src="assets/image/google-ad.jpg" class="google" alt="logo" width="250" height="85" >
               </a>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li  class="list-inline-item"><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li  class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li  class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li  class="list-inline-item"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li  class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              </ul>
            
          </li>
        </ul>
      </div>
      <div class="card-body">
    

         <form  autocomplete="off" action="pdf2.php" id="form" method="POST"  enctype="multipart/form-data"> 
      
            <div class="form-group">
                <label class="label" for="advertiser">1. advertiser / company name</label>
                <input type="text" class="form-control validate[required]" name="advertiser"  placeholder="
Crisp Digital India Private Limited" data-errormessage-value-missing="Advertiser /company name is required*" data-prompt-position="bottomLeft" >
            </div>
            <div class="form-group">
                <label class="label" for="address">2. address</label>
                <input type="text" class="form-control validate[required]"  name="address" placeholder="216 SF, Sushant Tower, Sushant Lok-II" data-errormessage-value-missing="Address is required*" data-prompt-position="bottomLeft">
            </div>
            <div class="form-row">
                  <div class="form-group col-md-6">
                      <label class="label" for="inputCity">3. City</label>
                      <input type="text" class="form-control validate[required]" name="city"  placeholder="Gurgaon" data-errormessage-value-missing="City is required*" data-prompt-position="bottomLeft">
                  </div>
                   <div class="form-group col-md-6">
                      <label class="label" for="pin">4. PIN</label>
                      <input type="text" class="form-control validate[required]" name="pin"  placeholder="122011" data-errormessage-value-missing="Pin is required*" data-prompt-position="bottomLeft">
                  </div>
            </div>

           <div class="form-row">
                 <div class="form-group col-md-6">
                      <label class="label" for="primary_phone">5. primary phone</label>
                      <input type="text" class="form-control validate[required]" name="primary_phone" placeholder="01244867430" data-errormessage-value-missing="Primary phone no is required*" data-prompt-position="bottomLeft">
                 </div>
                 <div class="form-group col-md-6">
                      <label class="label" for="mobile">6. mobile</label>
                      <input type="text" class="form-control validate[required]" name="mobile" id="" placeholder="9830331829" data-errormessage-value-missing="Mobile no is required*" data-prompt-position="bottomLeft">
                 </div>

                 <div class="form-group col-md-6">
                      <label class="label" for="person_to_contact">7. person to contact</label>
                       <div class="input-group">
                          <span class="input-group-addon">
                            <select name="sri" class="validate[required]" data-errormessage-value-missing="Title is required*" data-prompt-position="bottomLeft">
                              <option value="" >Choose</option>
                              <option value="Mr.">Mr.</option>
                              <option value="Mrs.">Mrs.</option>
                              <option value="Miss">Miss</option>
                            </select>
                          </span>
                          <input type="text" name="name" class="form-control validate[required]" placeholder="Full Name"  data-errormessage-value-missing="Name is required*" data-prompt-position="bottomLeft">
                      </div><!-- /input-group -->
                        
                 </div>

                  <div class="form-group col-md-6">
                     <label class="label" for="person_to_contact">8. designation</label>
                        <select class="form-control validate[required]" name="designation" data-errormessage-value-missing="Designation is required*" data-prompt-position="bottomLeft">
                          <option selected value="">Choose...</option>
                          <option value="Director">Director</option>
                          <option value="Proprietor">Proprietor</option>
                          <option value="Partner">Partner</option>
                          <option value="Authorized Signatory">Authorized Signatory</option>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="label" for="email_id">9. email id</label>
                      <input type="text" class="form-control validate[required[custom[email]]]" name="email_id" id="" placeholder="info@crispdigital.in"  data-errormessage-value-missing="Email is required*" data-prompt-position="bottomLeft">
                  </div>
                <div class="form-group col-md-6">
                  <label class="label" for="contract date">10. contract date</label>
                  <input type="date" class="form-control validate[required]" name="contract_date" id="" placeholder="Email id" data-errormessage-value-missing="Contract date is required*" data-prompt-position="bottomLeft">
               </div>


               <div class="form-group col-md-6">
                  <label class="label" for="sales person">11. sales person</label>
                  <input type="text" class="form-control validate[required]" name="sales_person" placeholder="Priyam Paul" data-errormessage-value-missing="Sales person name is required*" data-prompt-position="bottomLeft" />
               </div>
               
           </div>

          <div class="form-group">
            <label class="label" for="special_billing">12. special billing <span class="optional"> (optional)</span></label>
            <input type="text" class="form-control" name="special_billing" placeholder="special billing">
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="label" for="reporting_email_id">13. reporting email id</label>
              <input type="email" class="form-control validate[required[custom[email]]]" name="reporting_email_id"  placeholder="info@crispdigital.in" data-errormessage-value-missing="Reporting email is required*" data-prompt-position="bottomLeft">
            </div>
            <div class="form-group col-md-6">
              <label class="label" for="website">14. website</label>
              <input type="text" class="form-control validate[required]" name="website" placeholder="www.crispdigitalindia.com" data-errormessage-value-missing="Website is required*" data-prompt-position="bottomLeft">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label class="label" for="customer_pan_no">15. customer pan no</label>
              <input type="text" class="form-control validate[required]" name="customer_pan_no" placeholder="CRYPB9874B" data-errormessage-value-missing="Pan no is required*" data-prompt-position="bottomLeft">
            </div>
            <div class="form-group col-md-6">
              <label class="label" for="customer_gstin_no">16. customer gstin no</label>
              <input type="text" class="form-control validate[required]" name="customer_gstin_no"  placeholder="29CRYPB9874B2Z5" data-errormessage-value-missing="GSTIN no is required*" data-prompt-position="bottomLeft">
            </div>
          </div>
          <br><br>
          <div class="form-row">
                         <div class="form-group label col-md-4">SELECT YOUR PRODUCT AND SERVICES</div>
                         <div class="form-group label col-md-4">DESCRIPTION</div>
                         <div class="form-group label col-md-4">RATE (INR)</div>
          </div>
          
          <div class="form-row">
               <div class="form-group col-md-4">
                            <select class="form-control validate[required]" id="product_service_1" name="product_service_1" data-errormessage-value-missing="Minimum one product and services is required*" data-prompt-position="bottomLeft"> 
                                <option selected value="0">Choose...</option>
                            </select>
               </div>
               <div class="form-group col-md-4">
                  <textarea  class="form-control validate[required]" type="text" name="description_1" data-errormessage-value-missing="Description is required*" data-prompt-position="bottomLeft"></textarea>
               </div>
               <div class="form-group col-md-4">
                  <input class="form-control calculate auto_cal validate[required]" type="number" name="product_service_rate_1" data-errormessage-value-missing="Rate is required*" data-prompt-position="bottomLeft" id="calculate_1" value="0" onfocus="freez(this)" onblur="freez(this)">
               </div>
          </div>

           <div class="form-row">
               <div class="form-group col-md-4">
                            <select class="form-control " id="product_service_2" name="product_service_2"> 
                                <option selected value="0">Choose...</option>
                            </select>
               </div>
               <div class="form-group col-md-4">
                  <textarea  class="form-control" type="text" name="description_2" data-errormessage-value-missing="Rate is required*" data-prompt-position="bottomLeft"></textarea>
               </div>
               <div class="form-group col-md-4">
                  <input class="form-control calculate auto_cal" type="number" name="product_service_rate_2"
                   id="calculate_2" onfocus="freez(this)" onblur="freez(this)" value="0">
               </div>
          </div>

          <div class="form-row">
                <div class="form-group col-md-4">
                            <select class="form-control " id="product_service_3" name="product_service_3"> 
                                <option selected value="0">Choose...</option>
                            </select>
               </div>
               <div class="form-group col-md-4">
                  <textarea  class="form-control" type="text" name="description_3"></textarea>
               </div>
               <div class="form-group col-md-4">
                  <input class="form-control calculate auto_cal" type="number" name="product_service_rate_3" 
                  id="calculate_3" onfocus="freez(this)" onblur="freez(this)" value="0">
               </div>
          </div>
          <div class="form-row">
               <div class="form-group col-md-4">
                            <select class="form-control" id="product_service_4" name="product_service_4"> 
                                <option selected value="0">Choose...</option>
                            </select>
               </div>
               <div class="form-group col-md-4">
                  <textarea  class="form-control" type="text" name="description_4"></textarea>
               </div>
               <div class="form-group col-md-4">
                  <input class="form-control calculate auto_cal" type="number" name="product_service_rate_4"
                   id="calculate_4" onfocus="freez(this)" onblur="freez(this)" value="0">
               </div>
          </div>
          <div class="form-row">
              <div class="form-group col-md-4">
                            <select class="form-control" id="product_service_5" name="product_service_5"> 
                                <option selected value="0">Choose...</option>
                            </select>
               </div>
               <div class="form-group col-md-4">
                  <textarea  class="form-control" type="text" name="description_5"></textarea>
               </div>
               <div class="form-group col-md-4">
                  <input class="form-control calculate auto_cal" type="number" name="product_service_rate_5" 
                  id="calculate_5" onfocus="freez(this)" onblur="freez(this)" value="0">
               </div>
          </div>
          
          <div class="cbg">
             <div class="form-row">
                   <div class="form-group col-md-4"></div>
                   <div class="form-group col-md-4 label2">
                      MANAGEMENT FEES (INR)
                   </div>
                   <div class="form-group col-md-4 ">
                      <input class="form-control calculate auto_cal" type="number" name="management_fees" 
                      id="calculate_6" onfocus="freez(this)" onblur="freez(this)" value="0">
                   </div>
             </div>

              <div class="form-row">
                   <div class="form-group col-md-4"></div>
                   <div class="form-group col-md-4 label2">
                      TOTAL (INR)
                   </div>
                   <div class="form-group col-md-4">
                     <input type="number"  class="form-control calculate auto_cal" name="total" id="calculate_7" >
                   </div>
              </div>

               <div class="form-row">
                   <div class="form-group col-md-4"></div>
                   <div class="form-group col-md-4 label2">
                      NET PAYABLE (INR)
                   </div>
                   <div class="form-group col-md-4 ">
                     <input type="number"  class="form-control  calculate auto_cal" name="net_payable" id="calculate_8">
                   </div>
               </div>

                <div class="form-row">
                   <div class="form-group col-md-4"></div>
                   <div class="form-group col-md-4 label2">
                     GST 18% (INR)
                   </div>
                   <div class="form-group col-md-4">
                     <input type="text"  class="form-control calculate auto_cal" name="gst18" id="calculate_9">
                   </div>
               </div>

                <div class="form-row">
                   <div class="form-group col-md-4"></div>
                   <div class="form-group col-md-4 label2">
                     TOTAL PAYABLE (INR)
                   </div>
                   <div class="form-group col-md-4">
                     <input type="number"  class="form-control calculate auto_cal" name="total_payable" id="calculate_10">
                   </div>
               </div>
               <div class="form-row">
                   <div class="form-group col-md-4"></div>
                   <div class="form-group col-md-4 label2  calculate auto_cal">
                    AMOUNT RECEIVED (INR)
                   </div>
                   <div class="form-group col-md-4">
                     <input type="number"  class="form-control calculate auto_cal" name="amount_received" 
                     id="calculate_11" onfocus="freez(this)" onblur="freez(this)" value="0">
                   </div>
                </div>

              <div class="form-row">
                 <div class="form-group col-md-4"></div>
                 <div class="form-group col-md-4 label2 ">
                  BALANCE (INR)
                 </div>
                 <div class="form-group col-md-4">
                  <input type="number"  class="form-control calculate auto_cal" name="balance" id="calculate_12">
                 </div>
               </div>
               <div class="form-row">
                  <div class="col-md-10"></div>
                  <div class="col-md-2">
                    <label>Auto Calculator</label>
                     <input type="checkbox" checked data-toggle="toggle" id="auto_toggle" data-size="xs">
                     <input type="hidden" id="textbox1"  value="1" />
                  </div>
               </div>

            </div>
          

     
          <div class="form-row">
            <div class="form-group col-md-6">
              <h5 class="office-only">FOR OFFICE USE ONLY</h5>
               <div class="table table-bordered" style="background-color: rgba(0,0,0,.03);">
                      <div class="row c_row">
                        <div class="col-md-4">CHEQUE DATES</div>
                          <div class="col-md-8">
                            <textarea type="text" class="form-control validate[required]" name="c_date" data-errormessage-value-missing="Cheque date is required*" data-prompt-position="bottomLeft" ></textarea>
                          </div> 
                      </div>

                      <div class="row c_row">
                         <div class="col-md-4">CHEQUE NO/S</div>
                         <div class="col-md-8">
                            <textarea  class="form-control validate[required]" type="text" name="c_no" data-errormessage-value-missing="Chaque no is required*" data-prompt-position="bottomLeft"></textarea>
                          </div>
                      </div>

                       <div class="row c_row">
                          <div class="col-md-4">CHEQUE AMOUNT</div>
                          <div class="col-md-8">
                              <textarea type="text" class="form-control validate[required]" name="c_amount" data-errormessage-value-missing="Chaque amount is required*" data-prompt-position="bottomLeft"></textarea>
                          </div>
                      </div>

                      <div class="row c_row">
                         <div class="col-md-4">S.E / MANAGER NAME</div>
                        <div class="col-md-8">
                           <textarea type="text" class="form-control validate[required]" name="c_manager_name" data-errormessage-value-missing="S.E / MANAGER NAME is required*" data-prompt-position="bottomLeft"></textarea>
                        </div>
                      </div>

                
                     
                </div>
            </div>
            <div class="form-group col-md-6">
               <h5 class="office-only">BANK DETAILS FOR NEFT/RTGS</h5>
              <table class="table table-bordered" style="background-color: #e8e7d3;">
                      <tr>
                        <th>PAN</th>
                        <td>AAHCC0085H</td>
                      </tr>

                      <tr>
                        <th>GSTIN</th>
                        <td>06AAHCC0085H1ZU</td>
                      </tr>

                       <tr>
                        <th>BANKER</th>
                        <td>KOTAK MAHINDRA BANK LIMITED</td>
                      </tr>

                      <tr>
                        <th>BANK ADDRESS</th>
                        <td>THE PEACH TREE COMPLEX BLOCK-C, SUSHANT LOK-1 GURGAON-122001</td>
                      </tr>

                       <tr>
                        <th>ACCOUNT NO</th>
                        <td>2611864866</td>
                      </tr>

                       <tr>
                        <th>IFS CODE</th>
                        <td>KKBK0004256</td>
                      </tr>
                       

                
                     
                </table>
            </div>
          </div>

 
            <div class="form-row">
               <div class="form-group col-md-12">
                   <hr>
                   <label class="label" for="inputState">&nbsp;&nbsp; TERMS & CONDITIONS</label><br>
                      <p style="text-align: justify; padding: 5px 25px;font-size: 14px;">Signatory undertakes that he or she has full authority to contract for this advertising and further guarantees full payments of amount shown promptly with due.<br>
                      The above client here by requests 'Crisp Digital India Private Limited", to provide services for the items as shown in the table above as noted on the contract in accordance with the term and conditions endorsed herewith and on the following side of this contract.
                      <br><br>
                      <strong>IMPORTANT:</strong> the client warrants the he or she is/ they are the legal owner/ user of the telephone numbers given above and undertaken to indemnify  "Crisp Digital Private limited" against any claims by the telephone service provider or others party (les) on this account. The client also undertake to make payment specified on the face of this contract plus all state and local taxes which may be or become attributable there to on due dates noted above. Not with standing this 'Crisp Digital India Private Limited’ is entitled to collect full payment prior to providing service of the above items and failing such payment, is entitled to refuse to provide service (s) without prior notice to client. Sales personnel are expressly prohibited from collecting payment in cash. Only collectors bearing written authorization from MD/Digital Head of Crisp Digital India Private limited" may collect cash payment. Pursuant to the above contract, I/ We Hereby allow "Crisp Digital India Private Limited" to make commercial call to my / our Mobiles/ Number (s) and organization contact number (s). The declaration will hold valid even if I/We choose get my/ Our number(s) registered to NDNC.<br>
                    </p>
                  <center>
                    <h5 style="color: #da8b16">This applications is from Crisp Digital India Private Limited for all Digital Services</h5>
                  </center>
                  <p style="text-align: justify; padding: 5px 25px; font-size: 14px;">
                      Crisp Digital India Private Limited, shall be indemnified by the client for whom the services are provided in respect of any claims, actions, damages, costs and expenses arising out of an Illegal or libellous matter published for the client, or any infringement of copyright, patent ,design or mercantile or trademark. Crisp Digital India Private Limited, do not assure of or gives any performance guarantee in terms of lead, enquiry of order.
                      <br>
                      In case of any dispute the courts in Haryana only have jurisdiction.
                      <br>
                      All services are for a period 1 day to 365 days as specified and according to the services taken.
                  </p>

                    <p style="text-align: justify; padding: 5px 25px;font-size: 14px;">
                       <strong>FORCE MAJEURE :  </strong> 
                       The service provider (Crisp Digital India Private Limited) shall not be liableIn damages or have the right to terminate this contract for any delay or default in performing hereunder if such delay or default is caused by conditions beyond its control including, but not limited to Acts of God, war, insurrections/change of law, strikes or other labour disturbances , refusal on the part of the government agencies or other competent authority to grant any necessary permit or in the event of any other supervening clause ,and/or any other cause tendering performance of any of the obligations committed under the said contract.
                       <br>

                        <strong>Indemnity:   </strong>
                           The client hereby irrevocably and unconditionally undertakes to Indemnify Crisp Digital India Private Limited, In full and keep Crisp Digital India Private Limited, fully indemnified of claims arising out of Information, date, text, software, music, sound, photographs, graphics, videos, messages or any other material or content posted on the website or privately transmitted. The client undertakes the sole responsibility to take necessary action under such circumstances and takes entire responsibility for all contents present on the company website, posted or transmitted. 
                           <br><br>
                           It is the responsibility of client to ensure that material or content complies with national and international laws. 
                           <br><br>
                           Crisp Digital India Private Limited, reserves the right to add, alter, amend any of the terms and conditions of this agreement, at any time, after giving a written notice of one month to the advertiser under the hand of the MD//Head Digital of Crisp Digital India Private Limited. 
                           <br><br>
                           • On Cancellation/ request for refund of any contract from client side, a total of 18% of the contract value will be deducted. 
                           <br><br>
                            * Client will be responsible for keeping the of all its emails at his end, and under no circumstances Crisp Digital India Private Limited will be held responsible for managing backup of emails.
                            <br><br>
                            • Client emails can be blocked if it is found sending SPAMs or Viruses. 
                            <br><br>
                            • Crisp Digital India Private Limited will not provide any C-panel details, backup of website or emails to client under any circumstances.  
                            <br><br>
                            It will be client’s responsibility to provide the images for its products and services and in case of any copy infringement from clients end then Crisp Digital India Private Limited will not held responsible.
                            <br><br>
                            Search Engine Optimization (SEO) activities takes minimum 4 to 5 Months for measurable results to show.
                            <br><br>
                            Social Media Optimization (SMO) activities are purely organic as per the packages unless agreed to manage paid activities for additional agreed budget by the client. 
                            <br><br>
                             Crisp Digital India Private Limited will not provide any kind of access for Google Ads Account, backup of Ads except the daily report to client under any circumstances.  
                     </p>
                   
                  </div>
                  
                  <div class="col-md-11" style="padding-left: 20px;color: blue;font-size: 18px;;">
                     <input type="checkbox"  required="">
                       <label for="vehicle1">I understand, accept, and agree to the following terms and conditions </label><br>
                  </div>

                       
                          
                  
                 


          </div><br><hr> 


             <div class="form-row">
                <div class="form-group col-md-6" style="padding:0px 25px;">
                    <label class="label" for="inputState" >Authorised Signature</label><br>
                   
                    <input type="file" class="validate[required]" name="file_1" id="file_1" accept="image/*" onchange="preview_image(event)" data-errormessage-value-missing="Authorised Signature is required*" data-prompt-position="bottomLeft" required="">
                     <img id="output_image"/>
                </div>
                <div class="form-group col-md-6">

                    <label class="label" for="inputState">Company's Stamp</label><br>
                    
                    <input type="file" class="validate[required]" name="file_2"  accept="image/*" onchange="preview_image2(event)" data-errormessage-value-missing="Company's Stamp is required*" data-prompt-position="bottomLeft" required="">
                    <img id="output_image2"/>
                </div>   
            </div>  

 
           <br><br>
          <center>

         <!--    <div class="form-group g-recaptcha" style="margin-left: 22px;" data-sitekey="6LevFbkUAAAAACVOogk8Eq-0Jo6cfNoWswWddnyW" data-callback="enableBtn"></div>
          
            <div class="g-recaptcha"></div>   -->
             <input class="btn btn-danger" type="reset" onclick="return confirm_reset();">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         

            <button type="submit"  class="btn btn-primary" id="liquidacion_save" name="liquidacion[save]" onclick="$('form').attr('target', '');">
            Submit
            </button>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <button type="submit" class="btn btn-success" id="liquidacion_Previsualizar" name="liquidacion[Previsualizar]" onclick="$('form').attr('target', '_blank');">Preview</button>
             

         
              
           </center><br><br>
           

       
        </form>
      </div>
    </div>
</div>



<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/jquery.validationEngine-en.js"></script>
<script src="assets/js/jquery.validationEngine.js"></script>
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
<script src='assets/js/main.js'></script>
<script src="assets/js/bootstrap4-toggle.min.js"></script>

<script>

function freez(obj){
  var input = obj.value;
      input = input.trim();
       if(input == '0'){
         obj.value='';
       }
       else if(input == ''){
         obj.value='0';
       }
}



</script>
</body>
</html>
