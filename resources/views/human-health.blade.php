@extends('layouts.main')
@section('title')
 {{__('Human Health')}}
@endsection
@section('content')
<div class="main-content">
        <div class="wrapper" id="skipCont"></div>
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{ asset('assets/Nrcp_img/guidlines_bg.png') }}"
                    alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color padding">
                <h1 class="page-title">Human Health</h1>
                <ul>
                    <li>
                        <a class="active" href="{{ url('/') }}">Home</a>
                    </li>
                    <!-- <li>
                        <a class="active" href="index.html">about</a>
                    </li> -->
                    <li>
                        Human Health
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- Contact Section Start -->
        <div class="human-health-section pt-37 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                                                      
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th colspan="7">Human Rabies</th>    
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th colspan="2" >Jun - 23</th>
                                        <th colspan="2" >Jan - June 2023</th>
                                        <th colspan="2" >2023 till date</th> 
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Cases</th>
                                        <th>Death</th>
                                        <th>Cases</th>
                                        <th>Death</th>
                                        <th>Cases</th>
                                        <th>Death</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                    <tr>
                                        <td>INDIA</td>
                                       <td>229</td>
                                       <td>4</td>
                                       <td>1932</td>
                                       <td>46</td>
                                       <td>1986</td>
                                       <td>49</td>
                                    </tr>
                                    <tr>
                                        <td>Andaman &amp; Nicobar Islands</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Andhra Pradesh</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>5</td>
                                        <td>12</td>
                                        <td>5</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Arunachal Pradesh</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Assam</td>
                                        <td>7</td>
                                        <td>0</td>
                                        <td>38</td>
                                        <td>1</td>
                                        <td>42</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Bihar</td>
                                        <td>11</td>
                                        <td>0</td>
                                        <td>42</td>
                                        <td>1</td>
                                        <td>45</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Chandigarh</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Chhattisgarh</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>10</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Delhi</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>12</td>
                                        <td>0</td>
                                        <td>14</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Goa</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>4</td>
                                        <td>0</td>
                                        <td>4</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Gujarat</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>26</td>
                                        <td>1</td>
                                        <td>27</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Haryana</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>8</td>
                                        <td>0</td>
                                        <td>17</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Himachal Pradesh</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Jammu And Kashmir</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Jharkhand</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>15</td>
                                        <td>2</td>
                                        <td>15</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Karnataka</td>
                                        <td>6</td>
                                        <td>1</td>
                                        <td>193</td>
                                        <td>9</td>
                                        <td>195</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Kerala</td>
                                        <td>70</td>
                                        <td>0</td>
                                        <td>344</td>
                                        <td>0</td>
                                        <td>359</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Ladakh</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Lakshadweep</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Madhya Pradesh</td>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>571</td>
                                        <td>0</td>
                                        <td>575</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Maharashtra</td>
                                        <td>17</td>
                                        <td>1</td>
                                        <td>52</td>
                                        <td>15</td>
                                        <td>54</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>Manipur</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Meghalaya</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>7</td>
                                        <td>1</td>
                                        <td>8</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Mizoram</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Nagaland</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Odisha</td>
                                        <td>5</td>
                                        <td>0</td>
                                        <td>11</td>
                                        <td>0</td>
                                        <td>11</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Puducherry</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Punjab</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Rajasthan</td>
                                        <td>47</td>
                                        <td>0</td>
                                        <td>164</td>
                                        <td>0</td>
                                        <td>170</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Sikkim</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Tamil Nadu</td>
                                        <td>44</td>
                                        <td>0</td>
                                        <td>182</td>
                                        <td>3</td>
                                        <td>186</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Telangana</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>66</td>
                                        <td>0</td>
                                        <td>66</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>The Dadra And Nagar Haveli And Daman And Diu</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Tripura</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Uttarakhand</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Uttar Pradesh</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>165</td>
                                        <td>0</td>
                                        <td>166</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>West Bengal</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>

                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Contact Section End -->
    </div>

@endsection