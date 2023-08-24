@extends('layouts.main')
@section('title')
 {{__('Animal Health')}}
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
                <h1 class="page-title">Animal Health</h1>
                <ul>
                    <li>
                        <a class="active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a class="active" href="{{ url('/') }}">about</a>
                    </li>
                    <li>
                        Animal
                    </li>
              what are u doing
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- Contact Section Start -->
        <div class="animal-health-section pt-37 pb-100 md-pt-70 md-pb-70">
            <div class="container">
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                                                      
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th colspan="7"> Dog Bite</th>    
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
                                        <td>244563</td>
                                        <td>2</td>
                                        <td>1564207</td>
                                        <td>33</td>
                                        <td>1627934</td>
                                        <td>34</td>
                                    </tr>
                                    <tr>
                                        <td>Andaman & Nicobar Islands</td>
                                        <td>53</td>
                                        <td>0</td>
                                        <td>275</td>
                                        <td>0</td>
                                        <td>265204</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Andhra Pradesh</td>
                                        <td>16767</td>
                                        <td>0</td>
                                        <td>103683</td>
                                        <td>0</td>
                                        <td>229073</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Arunachal Pradesh</td>
                                        <td>275</td>
                                        <td>0</td>
                                        <td>1728</td>
                                        <td>0</td>
                                        <td>135994</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Assam</td>
                                        <td>7288</td>
                                        <td>0</td>
                                        <td>43110</td>
                                        <td></td>
                                        <td>161147</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>Bihar </td>
                                        <td>19208</td>
                                        <td>0</td>
                                        <td>130463</td>
                                        <td>0</td>
                                        <td>45226</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td >Chandigarh</td>
                                        <td >997</td>
                                        <td >0</td>
                                        <td >5792</td>
                                        <td >0</td>
                                        <td >109128</td>
                                        <td >2</td>
                                    </tr>
                                    <tr>
                                        <td>Chhattisgarh</td>
                                        <td>2644</td>
                                        <td>0</td>
                                        <td>17705</td>
                                        <td>0</td>
                                        <td>1944</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Delhi</td>
                                        <td>1469</td>
                                        <td>0</td>
                                        <td>9037</td>
                                        <td>0</td>
                                        <td>10725</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Goa</td>
                                        <td>975</td>
                                        <td>0</td>
                                        <td>6011</td>
                                        <td>0</td>
                                        <td>13388</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Gujarat</td>
                                        <td>21629</td>
                                        <td>1</td>
                                        <td>130476</td>
                                        <td>3</td>
                                        <td>62843</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Haryana</td>
                                        <td>3618</td>
                                        <td>0</td>
                                        <td>21639</td>
                                        <td>0</td>
                                        <td>4628</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Himachal Pradesh</td>
                                        <td>1672</td>
                                        <td>0</td>
                                        <td>10277</td>
                                        <td>1</td>
                                        <td>47167</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Jammu And Kashmir</td>
                                        <td>3126</td>
                                        <td>0</td>
                                        <td>17423</td>
                                        <td>0</td>
                                        <td>53007</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Jharkhand</td>
                                        <td>2064</td>
                                        <td>0</td>
                                        <td>12814</td>
                                        <td>1</td>
                                        <td>282</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Karnataka</td>
                                        <td>18948</td>
                                        <td>0</td>
                                        <td>104223</td>
                                        <td>2</td>
                                        <td>108434</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Kerala</td>
                                        <td>6425</td>
                                        <td>0</td>
                                        <td>28225</td>
                                        <td>0</td>
                                        <td>1804</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Ladakh</td>
                                        <td>91</td>
                                        <td>0</td>
                                        <td>1305</td>
                                        <td>0</td>
                                        <td>135626</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Lakshadweep</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>6041</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Madhya Pradesh</td>
                                        <td>9110</td>
                                        <td>0</td>
                                        <td>60416</td>
                                        <td>1</td>
                                        <td>18019</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Maharashtra</td>
                                        <td>39518</td>
                                        <td>0</td>
                                        <td>255822</td>
                                        <td>12</td>
                                        <td>9528</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Manipur</td>
                                        <td>56</td>
                                        <td>0</td>
                                        <td>1926</td>
                                        <td>2</td>
                                        <td>6188</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Meghalaya</td>
                                        <td>680</td>
                                        <td>0</td>
                                        <td>4459</td>
                                        <td>1</td>
                                        <td>22436</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Mizoram</td>
                                        <td>75</td>
                                        <td>0</td>
                                        <td>538</td>
                                        <td>0</td>
                                        <td>18186</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Nagaland</td>
                                        <td>72</td>
                                        <td>0</td>
                                        <td>256</td>
                                        <td>0</td>
                                        <td>29984</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Odisha</td>
                                        <td>6767</td>
                                        <td>0</td>
                                        <td>45653</td>
                                        <td>1</td>
                                        <td>1343</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Puducherry</td>
                                        <td>1096</td>
                                        <td>0</td>
                                        <td>7605</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Punjab</td>
                                        <td>1941</td>
                                        <td>0</td>
                                        <td>8910</td>
                                        <td>0</td>
                                        <td>571</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Rajasthan</td>
                                        <td>8258</td>
                                        <td>0</td>
                                        <td>50594</td>
                                        <td>1</td>
                                        <td>299</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Sikkim</td>
                                        <td>682</td>
                                        <td>0</td>
                                        <td>3209</td>
                                        <td>0</td>
                                        <td>7840</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Tamil Nadu</td>
                                        <td>37021</td>
                                        <td>0</td>
                                        <td>218835</td>
                                        <td>4</td>
                                        <td>9448</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Telangana</td>
                                        <td>9653</td>
                                        <td>0</td>
                                        <td>62035</td>
                                        <td>0</td>
                                        <td>3339</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>The Dadra And Nagar Haveli And Daman And Diu</td>
                                        <td>415</td>
                                        <td>0</td>
                                        <td>2808</td>
                                        <td>0</td>
                                        <td>64888</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Tripura</td>
                                        <td>630</td>
                                        <td>0</td>
                                        <td>3203</td>
                                        <td>0</td>
                                        <td>2928</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Uttarakhand</td>
                                        <td>1892</td>
                                        <td>0</td>
                                        <td>12773</td>
                                        <td>0</td>
                                        <td>3387</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Uttar Pradesh</td>
                                        <td>15950</td>
                                        <td>1</td>
                                        <td>157140</td>
                                        <td>3</td>
                                        <td>13294</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>West Bengal</td>
                                        <td>3498</td>
                                        <td>0</td>
                                        <td>23839</td>
                                        <td>0</td>
                                        <td>24595</td>
                                        <td>0</td>
                                    </tr>
                                   
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Contact Section End -->
    </div>

@endsection