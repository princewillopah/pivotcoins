@extends('layouts.frontend')
{{-----------------------------------------------------------------}}
@section('title')
FAQ
@endsection

@section('content')

    <section id="bg-faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp">Frequently Asked Questions</h1>
                            <div class="wow fadeInUp">
                                <span class="sub cssanimation leFadeInLeft sequence">Your questions answered</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="faq sections">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <h2>about pivotcoins</h2>
                    <div class="accordion-container">
                        <div class="panel">
                            <div class="heading">WHAT IS PIVOTCOINS? </div>
                            <div class="content">
                                <p>
                                    Pivotcoins is a digital investment platform that helps you identify 
                                    and invest in your financial goals, whether that means investing for retirement, 
                                    building wealth, or saving for a major purchase
                                </p>  
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading"> WHY IS IT PROFITABLE FOR ME TO COOPERATE WITH Pivotcoins LIMITED? </div>
                            <div class="content">
                            <p>
                            High profit is ensured by the rapid growth rates of the 
                            cryptocurrency market in general and Bitcoin in particular. 
                            Our financial risks are minimized by diversified investments in various activities.
                           </p>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">IS Pivotcoins LIMITED A REGISTERED AND LEGAL COMPANY? </div>
                            <div class="content">
                            <p> Yes, of course. Pivotcoins Limited is officially registered
                             in the jurisdiction of Great Britain under registration number
                             11067962. You can check the registration information on the company’s website.    <p>    
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading"> How do I know if it’s right for me?</div>
                            <div class="content">
                            <p>     Pivotcoins Investment is designed for people
                                     who are looking for a simple, easy way to
                                      invest online. with Pivotcoins Investment, It is a discretionary investment 
                                      advisory which means we make financial decisions for you. 
                                      Unlike other kinds of investments where you authorize each trade, this 
                                      investment type enables us to make trades on your behalf when
                                    we believe that doing so is in your best interest since we have the 
                                    best experts in this field. 
                                     <p>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading"> WHAT IS THE MINIMUM DEPOSIT? </div>
                            <div class="content">
                            <p>  Minimum investment to deposit(invest) as a member is $1,000, 
                                    which is the lower end of the silver plan.  <p>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">  WHAT INVESTMENT RISK DO I STAND TO FACE? </div>
                            <div class="content">
                            <p>At Pivotcoins, wise measures are taken to prevent any forms of loses by 
                                        trading at a low percentage 
                                        of the account to minimise risk. Specific 
                                        safeguards are also put in place to reduce any possible risk 
                                        our investors may face.  <p>
                             </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-basic">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <h2>General questions</h2>
                    <div class="accordion-container">
                        <div class="panel">
                            <div class="heading">How to become a Pivotcoins' investor? </div>
                            <div class="content">
                                <p>
                                    To become a part of Pivotcoins investor, you have to create an account supplying 
                                    valid information to the input fields. you will be redirected to the email account you 
                                    provided for confirmation. Ater verification, you can now login to be directed to your dashboard.
                                </p>  
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading"> Can I open multiple accounts? </div>
                            <div class="content">
                            <p>
                            Yes. there is no limit to the number of accounts you can have, provided
                             each account has unique credentials(e.g email account)
                           </p>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading">What can i do if when  have difficulties accessing my account.</div>
                            <div class="content">
                            <p> If your issue is related to password, then make use of the "Forgot Password" feature in 
                                your login page and provide the e-mail address you provided during registration and click "Reset Password".  
                                your password will be reset.
                            </p>   
                             <p> 
                                 If your issue is related to emal address, then or other forms which may not likely be, the reach us 
                                 via suupport@pivotcoins.trade. we will fix it right away.
                                </p>  
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading"> Can I delete my account at Pivotcoins?</div>
                            <div class="content">
                            <p> Yes. To delete your account, you should contact our customer support through the feedback form, and we will resolve this issue.</p>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. </div>
                            <div class="content">
                            <p>Minimum investment to deposit(invest) as a member is $1,000, 
                                    which is the lower end of the silver plan.  </p>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="heading"> Lorem ipsum dolor sit amet.</div>
                            <div class="content">
                            <p>   At Pivotcoins, wise measures are taken to prevent any forms of loses by 
                                        trading at a low percentage 
                                        of the account to minimise risk. Specific 
                                        safeguards are also put in place to reduce any possible risk 
                                        our investors may face.  </p>
                             </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>  
   
@endsection



@section('style')
<link rel="stylesheet" href="css/vendor/accordion.css">

@endsection

@section('script')
<script src="js/accordion.min.js"> </script>
<script>
    var accordion = new Accordion('.accordion-container',{

        // hides all answers
        hideAll: false,

        // shows all answers
        showAll: false,

        // shows the first answer
        showFirst: false,

        // panel ID you want to show at first time
        panelId: null

        });
</script>
@endsection
