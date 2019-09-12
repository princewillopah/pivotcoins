@extends('layouts.frontend')
{{-----------------------------------------------------------------}}
@section('title')
    Investment Plan
@endsection

@section('content')

    <section id="bgplans">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp">Investments Plans</h1>
                            <div class="wow fadeInUp">
                                <span class="sub cssanimation leFadeInLeft sequence"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="plans-main">
        <div class="container">
            <div class="row">
            
                    <div class="col-md-6">
                        <img src="img/referral/employee-referral.jpg" class="img-fluid " alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="ref-main-main">
                          <h1>Get An Extra 5% In</h1>
                          <p>Here in Pivotcoins, we offers a transparent mechanism for attracting investments and making profits. 
                             Our expert group assumes only those obligations that we are able to fulfill, 
                             therefore your profit is guaranteed, as well as the safety of your investments.
                             We do not define any period of cooperation, and your deposits will work on a 
                             permanent basis, bringing you profits every week. You can make as many deposits 
                             as you need. The minimum deposit is only 10000 USD and there is no maximum limit. 
                             After creating the deposit and 3 confirmations by the network, the invested amount
                             will start generating profit every week. The withdrawal of profits becomes available 
                             once your balance reaches at least 10 USD.
                             You will never suffer even the slightest delay of payment once your 
                             withdrawal application is made.
                            </p>  
                        </div>
                    </div>
                
            </div>
        </div>
    </section>

      <!-- ==================================================== -->
    <!-- COUR PLANS -->
    <!-- ==================================================== -->
    <section id="our-plans" class="sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h1>Our Plans</h1>
                        <img src="img/generics/icon/header-gray.png" alt=""><br>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p> -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-inner">
                            <h3 class="title">Silver</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                            
                            <h2 class="percent">3%</h2>
                    {{--            <p class="percent-limit">Profit Made Weekly</p>
                            <p class="invest">$1000 - $5000</p> --}}
                            <table class="table">
                                <tbody>
                                    <tr>
                                    <td>Weekly interest: </td>
                                    <td>3%</td>
                                    </tr>
                                    <tr>
                                    <td>Minimal investment:</td>
                                    <td>$1000</td>                  
                                    </tr>
                                    <tr>
                                    <td>Maximal investment:</td>
                                    <td>$5000</td>
                                    </tr>
                                    <tr>
                                    <td>Investment term:</td>
                                    <td>Forever</td>
                                    </tr>
                                    <tr>
                                    <td>Payment Days:</td>
                                    <td>Weekends</td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>
                        <hr>
                        <div class="card-footer">
                        <a href="{{route('register')}}">Sign Up</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-inner">
                            <h3 class="title">Gold</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                            <h2 class="percent">4%</h2>
                            {{-- <p class="percent-limit">Profit Made Weekly</p>
                            <p class="invest">$6000 - $19000</p> --}}
                            <table class="table">
                                <tbody>
                                    <tr>
                                    <td>Weekly interest: </td>
                                    <td>4%</td>
                                    </tr>
                                    <tr>
                                    <td>Minimal investment:</td>
                                    <td>$6000</td>                  
                                    </tr>
                                    <tr>
                                    <td>Maximal investment:</td>
                                    <td>$19000</td>
                                    </tr>
                                    <tr>
                                    <td>Investment term:</td>
                                    <td>Forever</td>
                                    </tr>
                                    <tr>
                                    <td>Payment Days:</td>
                                    <td>Weekends</td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <a href="{{route('register')}}">Sign Up</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-inner">
                            <h3 class="title">Diamond</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                            <h2 class="percent">5%</h2>
                            {{-- <p class="percent-limit">Profit Made Weekly</p>
                            <p class="invest">$20,000 and above</p> --}}
                            <table class="table">
                                <tbody>
                                    <tr>
                                    <td>Weekly interest: </td>
                                    <td>5%</td>
                                    </tr>
                                    <tr>
                                    <td>Minimal investment:</td>
                                    <td>$20,000</td>                  
                                    </tr>
                                    <tr>
                                    <td>Maximal investment:</td>
                                    <td>No Limit</td>
                                    </tr>
                                    <tr>
                                    <td>Investment term:</td>
                                    <td>Forever</td>
                                    </tr>
                                    <tr>
                                    <td>Payment Days:</td>
                                    <td>Weekends</td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <a href="{{route('register')}}">Sign Up</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
       <!-- ==================================================== -->
    <!-- OUR CALCULATOR -->
    <!-- ==================================================== -->  

    <section class="calc sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h2>PROFIT CALCULATOR</h2>
                        <p style="color:#aaa;">Make your calculations. know your profit</p>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2" >
                        <form class="" action="#" method="post" name="calculator" id="calc-form">
                            <div class="row">
                                    <div class="col-md-6" > 
                                            <div class="form-group">
                                                <label>Choose a plan:</label>
                                                <select id="calc-plans" class="form-control inpts select">
                                                    <option value="0">3% Silver Weekly Plan</option>
                                                    <option value="1">4% Gold Weekly Plan</option>
                                                    <option value="2">5% Diamond Weekly Plan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">        
                                                <label>Deposit amount ($):</label>
                                                <input id="principal" value="10" type="text" class="form-control inpts">
                                            </div>
                                        </div>  
                                        <div class="col-md-6" > 
                                           <div class="form-group form-field">        
                                                <label>Weekly interest (%):</label>
                                                <input id="daily_interest" value="" class="form-control inpts" type="text" readonly="readonly">
                                            </div>
                                        
                                            <div class="form-group form-field">        
                                                <label>Weekly profit ($):</label>
                                                <input id="daily_profit" value="" class="form-control inpts" type="text" readonly="readonly">
                                            </div>
                                        </div>
                            </div>
                                
                            <div class="calc-tr small second" style="display:none">
                                <div class="form-field">        
                                    <label>Daily interest (%):</label>
                                    <input id="hourly_interest" value="" class="inpts" type="text" readonly="readonly">
                                </div>            
                            </div>
                            <div class="calc-tr small second" style="display:none">
                                <div class="form-field">        
                                    <label>Daily profit ($):</label>
                                    <input id="hourly_profit" value="" class="inpts" type="text" readonly="readonly">
                                </div>                
                            </div> 

                       </form> 
                </div>
            </div>
        </div>
    </section>
            
@endsection



@section('style')
    <style>

    </style>
@endsection

@section('script')
<script>


window.onload = function() {

    var Calculator = function() {
    	this.roundDepo = function(z, o) {
    		var order = o || 2;
    		return z.toFixed(order);
    	}
		
		var PLANS = [
            [1000, 5000, 3, 0.03],
            [6000, 19000, 4, 0.04],
            [20000, Infinity, 5, 0.05]
        ];	
        // var PLANS = [
        //     [1000, 9999, 15, 0.15],
        //     [10000, 49999, 30, 0.3],
        //     [2501, Infinity, 45, 0.45]
        // ];		
        
        this.getCorrectPlanIndex = function(depo) {
          
          for (var i = 0; i < PLANS.length; i++) {
            if (depo >= PLANS[i][0] && depo < PLANS[i][1]) {
              return i;
            }
          }
              
        };

        this.getMinimalDeposit = function(index) {
            return this.roundDepo(PLANS[index][0]);
        };
          

    	this.calc = function() {
            var plan = PLANS[document.getElementById('calc-plans').value],
            	depo = document.getElementById('principal').value;
    		
    		var dailyInterest = plan[2].toFixed(0),
            	hourlyInterest = plan[3].toFixed(4),
                dailyProfit = this.roundDepo(depo * dailyInterest / 100),
                hourlyProfit = this.roundDepo(depo * hourlyInterest / 100);
                
    		document.getElementById('daily_interest').value = dailyInterest;
    		document.getElementById('hourly_interest').value = hourlyInterest;
            document.getElementById('daily_profit').value = dailyProfit;
            document.getElementById('hourly_profit').value = hourlyProfit;
    	}
    }

    var calculator = new Calculator(),
    	planEl = document.getElementById('calc-plans'),
        depoEl = document.getElementById('principal');

    planEl.addEventListener("change", function() {
        depoEl.value = calculator.getMinimalDeposit(this.value);
        calculator.calc();
    });
    depoEl.addEventListener("keyup", function() {
      if (depoEl.value != '')  {
        var idx = calculator.getCorrectPlanIndex(depoEl.value);
          if (idx != planEl.value) {
            
            planEl.value = idx;
          }
      }
        calculator.calc();
    });
      calculator.calc();
}
</script>
@endsection