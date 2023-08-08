@extends('layouts.main')
@section('title')
 {{__('Activities')}}
@endsection
@section('content')
<div class="main-content">
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset('assets/Nrcp_img/banner.png')}}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Activities</h1>
                <ul>
                    <li>
                        <a class="active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li>Activities</li>
                </ul>
            </div>
        </div>
        <div id="rs-about" class="rs-about style1 pt-40 pb-40 md-pt-70 md-pb-70">
            <div class="container">

                <div class="rs-about-accordian">
                    <div class="faq-content">
                        <div id="accordion" class="accordion">


                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">Training and
                                        capacity building </a>
                                </div>
                                <div id="collapseOne" class="collapse " data-parent="#accordion">
                                    <div class="card-body">
                                        Under the programme to review the activites undertaken by the states review
                                        Meeting of State Nodal Offciers ( SNOs ) and Training of Master Trainers & under
                                        National Rabies Control Programme (NRCP) was held on 11th October and 12th
                                        October 2018. States were advocated in the meeting to put emphasis on rabies
                                        surveillance and ensuring the availability of ARV and ARS for animal bit
                                        victims. State level Training plans on Animal Bite management and Rabies
                                        prophylaxes, Surveillance received from 6 States and training of medical
                                        officers and health workers are being conducted across the states. All states
                                        and UTs have designated Nodal Officers for NRCP& District Nodal Offices is being
                                        appointed in 7 states. To standardize the trainings under NRCP, Technical
                                        Committee of experts has been formed for developing Modules and following
                                        training modules are being prepared-Training module for the Medical
                                        Officers,Training module for the Health workers, Manual for Rabies diagnostics.

                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo"
                                        aria-expanded="false">Guidelines and techncial support to states</a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        To review the recent WHO recomondation on Rabies post exposure propohylaxis (
                                        2017 ) expert group meeting on Revision of National Guidelines for Rabies
                                        Prophylaxis held at NCDC on 8th January, 2019 & minutes were circulated to
                                        stakeholders Review of Rabies control in the state of Goa under the Mission
                                        Rabies was underken in oct. 2018.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree"
                                        aria-expanded="false">Rabies and animal bite surveillance</a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        The standard cases definition on suspected, probable and confirmed cases has
                                        been finalized in the expert group meeting held at NCDC. The probable case
                                        definition for suspected human rabies has been included under IDSP. Apart from
                                        this programm is also mapping and networking of tertiary care hospital
                                        (Infectious disease hospitals/Medical College, District Hospital etc.) in the
                                        States and Districts. Reporting formats on Animal bite, rabies, laboratory
                                        surveillance are being finalised to standardize the reporting Process for Rabies
                                        as a notifiable disease initiated.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour"
                                        aria-expanded="false">Laboratory strengthening for rabies diagnosis</a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        Four regional laboratories has been supported under the programme to
                                        Strengthening Rabies Diagnostics( National Institute of Mental Health and
                                        Neurosciences (NIMHANS), Disease Investigation Unit Lab, Directorate of Animal
                                        Husbandry and Veterinary Services,Government of Goa, Panaji, Goa, AIIMS Jodhpur,
                                        National Center for Disease Control (NCDC), Delhi ) Review meeting of above labs
                                        conducted on 12 thOct 2018. For further labs. Strengthening in the country
                                        regional workshops are planned for Medical & Vet. Microbiologists.NIMHANS
                                        banglore organised the workshop in March 2019 and more 30 microbiologist were
                                        trained during the workshop from 4-5 states.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive"
                                        aria-expanded="false">IEC activites</a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        Under the Programme Prototype IEC material was developed and disseminated to the
                                        States. World Rabies Day is observed on 28th September each year at NCDC and
                                        States were advocated to observe it at State/District level as per the theme of
                                        Audio and video spots were created and maass media comapign was conduected for
                                        10 days for generating community awrnesss on rabies from 25 sept to 4 oct 2018.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseSixe"
                                        aria-expanded="false">Interectoral coordination for Rabies control</a>
                                </div>
                                <div id="collapseSixe" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        To institutionalize the “ONE HEALTH”approach at National level – Collaboration
                                        with DADF, Ministry of Agriculture and Farmer Welfare (MoA&FW) for development
                                        of technical guidelines for animal component of rabies control has been done.
                                        MoU is proposed to be signed between DADF, MoA&FW, MoH&FW, Wild life institute
                                        of India for prevention and control of Zoonotic Disease in India including
                                        rabies. 14 States constituted State Level Zoonosis Committee (SLZC) for
                                        intersectoral coordination for prevention and control for zoonosis including
                                        Rabies. SOPs for institutionalizing One Health approach for Rabies is under
                                        process.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven"
                                        aria-expanded="false">Operationl research</a>
                                </div>
                                <div id="collapseSeven" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        Preliminary meeting on study on assessment of Rabies burden in the country held
                                        with stakeholders ( NIE Chennai, APCRI ) at ICMR on 28th December, 2018.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine"
                                        aria-expanded="false">The State and District level activities</a>
                                </div>
                                <div id="collapseNine" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            under National Rabies Control Programme are being implemented through the
                                            National Health mission since FY 2019-20. State and District level
                                            activities are-
                                        </p>
                                        <div class="blog-deatails mt-3">
                                            <div class="blog-full p-0">
                                                <ul class="unorder-list mb-20">
                                                    <li> Provision of procurement of Anti-Rabies Vaccine/Anti-Rabies
                                                        Serum for animal bite victims through National Free Drug
                                                        Initiative
                                                    </li>
                                                    <li> Capacity building through trainings of Medical Officers and
                                                        Health Workers under NRCP</li>
                                                    <li> IEC/BCC under NRCP: Rabies Awareness and
                                                        Do’s and Don’ts in the event of Animal Bites </li>
                                                    <li> Monitoring and Surveillance (review meetings,
                                                        Travel) and printing of formats for Monitoring and
                                                        Surveillance </li>
                                                </ul>
                                            </div>
                                        </div>


                                        Accordingly, the National Action Plan for Dog Mediated
                                        Rabies Elimination from India by 2030 (NAPRE) was launched.
                                        The NAPRE was developed under the National Rabies Control
                                        program in coordination with MoFAH&D, MoA&FW, MoPR, MoST,
                                        MoH&UA, NITI AAYOG and other key stakeholders based on a
                                        ‘One Health’ approac h.

                                    </div>


                                    <div class="desc">
                                        Accordingly, a DO letter NO. NRCP/55/157/07/2022DZDP-NCDC dated 26th
                                        of July, 2022 was issued from Secretary MoHFW to Constitute Joint Steering
                                        Committee as envisaged in “National Action Plan for Dog Mediated Rabies
                                        Elimination from India by 2030 (NAPRE)” and to undertake gap analysis of rabies
                                        situation and as preliminary step to formulate Action Plans for Dog Mediated
                                        Rabies Elimination (SAPRE) in consultation with relevant stakeholders i.e Dept.
                                        of
                                        Health, Dept. of Animal Husbandry, Dept. of Wildlife and Forest, Dept. of Urban
                                        development, Municipal corporation and local bodies etc.
                                        Also, a DO Letter No. D-O-No.2283429/NRCP/DZDP-NCDC/DGHS dated 20-
                                        9-2021 issued from Secretary MoHFW to make Human Rabies a Notifiable
                                        Disease under Clinical Establishment Registration and Regulation Act 2010 or
                                        respective State Public Health Act or Nursing Home Act, so as to made mandatory
                                        for all government and private health facilities (including medical colleges) to
                                        report
                                        all suspected, probable and confirmed Human Rabies cases as per the guidelines
                                        formalized by National Rabies Control Program.
                                    </div>

                                    <div class="desc">
                                        As Rabies elimination can only be achieved through “One Health approach”
                                        which requires collaboration of various stakeholders’ ministries and strong
                                        political
                                        commitment. Further to this, as a next step, it is pertinent that all state
                                        level
                                        stakeholders should be sensitized about the NAPRE and handholding should be
                                        done with respective State Governments Stakeholders to prepare and plan for
                                        formulation of State Specific Action plan to ensure the achievement of Rabies
                                        Prevention and Control and Ultimate Elimination from the country.
                                    </div>


                                    <div class="desc rs-inner-blog">

                                        In light of the above, the NCDC has organised Regional Level Workshops for
                                        handholding of State level stakeholders and preparation of “State Action Plans
                                        for
                                        Dog Mediated Rabies Elimination (SAPRE) from India by 2030” with the key
                                        objectives as:

                                        <div class="blog-deatails mt-3">
                                            <div class="blog-full p-0">
                                                <ul class="unorder-list mb-20">
                                                    <li>
                                                        Sensitization and Handholding state level stakeholders (State
                                                        Nodal
                                                        officer
                                                        NRCP, State Animal Husbandry officers, State Forest/wild life
                                                        officers,
                                                        representative of Municipal corporations, regional coordinators,
                                                        partners) for
                                                        preparation of State Action plan on Rabies Elimination.
                                                    </li>
                                                    <li>
                                                        Identify areas of collaboration, data sharing mechanisms and
                                                        methods to
                                                        implement the collaboration.
                                                    </li>
                                                    <li>
                                                        Shape the forward vision agenda for Rabies Elimination by 2030
                                                        with
                                                        shared
                                                        purpose in collaboration with stakeholders.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="desc">
                                        In this regard, a multi- stakeholder workshop for developing Delhi Action Plans
                                        for Dog Mediated Rabies Elimination (SAPRE) in Consultation with officials of
                                        Delhi, Govt. and all the stakeholders based on a ‘One Health’ approach was
                                        conducted on 14th and 15th of Sept, 2022 at NASC Complex, Pusa, New Delhi –
                                        110012. As outcome, Delhi being the National Capital of India has come up with
                                        Draft Action Plans for Dog Mediated Rabies Elimination (SAPRE) which will
                                        encourage other States and UTs also for formulating and implementing the SAPRE.
                                        The main objective is to fill the gaps for better coordination with key
                                        stakeholders at
                                        administrative and technical level for formulating and implementing the SAPRE.

                                        <img src="assets/Nrcp_img/banner/banner-1.JPG" class="image-fit-text" />
                                    </div>

                                    <div class="desc">
                                        In similar lines, a multi- stakeholder two-day regional workshop under
                                        National Rabies Control Program (NRCP) for developing State Action Plan for
                                        Dog Mediated Rabies elimination (SAPRE) for Southern Region ( Karnataka,
                                        Telangana, Tamil Nadu, Puducherry, Andhra Pradesh and Kerala)was
                                        conducted on 14th and 15th October, 2022. The workshop had a series of
                                        technical sessions and group exercises on both days to develop a strategic
                                        action
                                        plan for rabies elimination from the States/UT. As an outcome Karnataka,
                                        Telangana,
                                        Tamil Nadu, Puducherry, Andhra Pradesh and Kerala has come up with draft State
                                        Action Plan for Dog Mediated Rabies elimination (SAPRE) as a guidance document
                                        for the districts level stakeholders to develop their own action plan, specific
                                        to their
                                        needs and aims at systematic reduction of rabies risk through sustained mass dog
                                        vaccinations, pre and post-exposure prophylaxis and public education until free
                                        dog
                                        mediated rabies status is achieved.

                                        <img src="assets/Nrcp_img/Picture1.jpg" class="image-fit-text" />
                                    </div>

                                    <div class="desc">
                                        Also, a multi- stakeholder two-day regional workshop under National Rabies
                                        Control Program (NRCP) for developing State Action Plan for Dog Mediated
                                        Rabies elimination (SAPRE) for the North Eastern Region was conducted in
                                        May, 2023 with a series of technical sessions and group exercises on both days
                                        to
                                        develop a strategic action plan for rabies elimination from the States by 2030.


                                        <img src="assets/Nrcp_img/Picture2.jpg" class="image-fit-text" />
                                    </div>

                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen"
                                        aria-expanded="false">Activities undertaken under NRCP</a>
                                </div>
                                <div id="collapseTen" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="desc">
                                            The Human Health Component Dashboard is designed to track and manage rabies
                                            cases and
                                            related data concerning human health. It will be a centralized platform that
                                            consolidates data
                                            from healthcare facilities, laboratories, and public health departments
                                            nationwide. The
                                            key
                                            features of this Dashboard will include

                                            <div class="blog-deatails mt-3">
                                                <div class="blog-full p-0">
                                                    <ul class="unorder-list mb-20">
                                                        <li>
                                                            <b>Rabies Case Tracking </b> <br>
                                                            Real-time recording and monitoring of rabies cases reported
                                                            from
                                                            healthcare
                                                            facilities across the country.
                                                        </li>
                                                        <li>
                                                            <b> Geographic Mapping </b> <br>
                                                            Integration of geographical information system (GIS) to
                                                            visualize the
                                                            distribution of
                                                            rabies cases and identify high-risk areas.
                                                        </li>

                                                        <li>
                                                            <b> Vaccination Status </b> <br>

                                                            Tracking the administration of pre-exposure and
                                                            post-exposure
                                                            prophylaxis to
                                                            individuals who have been exposed to potentially rabid
                                                            animals.
                                                        </li>
                                                        <li>
                                                            <b> Epidemiological Trends </b> <br>

                                                            Analysis of data to identify patterns, trends, and potential
                                                            outbreaks
                                                            for timely
                                                            response and preventive measures.
                                                        </li>

                                                        <li>
                                                            <b>Reporting and Alert Mechanism </b> <br>

                                                            Streamlined reporting and notification system for immediate
                                                            response to
                                                            suspected rabies cases.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseEleven"
                                        aria-expanded="false">Animal Health Component Dashboard</a>
                                </div>
                                <div id="collapseEleven" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="desc">
                                            The Animal Health Component Dashboard will focus on monitoring rabies cases
                                            and
                                            vaccination efforts within animal populations. It will integrate data from
                                            veterinary
                                            clinics, animal shelters, and relevant government agencies to create a
                                            comprehensive
                                            overview. The main features of this dashboard will include:

                                            <div class="blog-deatails mt-3">
                                                <div class="blog-full p-0">
                                                    <ul class="unorder-list mb-20">
                                                        <li>
                                                            <b>Rabies Surveillance</b> Monitoring and analysis of rabies
                                                            cases in
                                                            animals, including
                                                            domestic pets and wildlife, to detect potential outbreaks.
                                                        </li>
                                                        <li>
                                                            <b>Vaccination Coverage </b> Tracking the implementation of
                                                            mass
                                                            vaccination campaigns and
                                                            ensuring optimal coverage of targeted animal populations.
                                                        </li>
                                                        <li>
                                                            <b>Stray Animal Control</b> Recording efforts and outcomes
                                                            of stray
                                                            animal control programs
                                                            to minimize rabies transmission.
                                                        </li>
                                                        <li>
                                                            <b> Laboratory Data Integration</b> Incorporating data from
                                                            veterinary
                                                            diagnostic laboratories
                                                            to confirm rabies cases and study the virus strains.
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="container">

                <div class="row">

                    <!-- <div class="col-lg-12">
                    <div class="sec-title">

                      

                        <h4 class="title mb-17">DASHBOARDS </h4>
                        <div class="bold-text mb-20 mt-30 text-black">Activities undertaken under NRCP: </div>
                        <div class="desc">
                            The Human Health Component Dashboard is designed to track and manage rabies cases and
                            related data concerning human health. It will be a centralized platform that
                            consolidates data
                            from healthcare facilities, laboratories, and public health departments nationwide. The
                            key
                            features of this Dashboard will include

                            <div class="blog-deatails mt-3">
                                <div class="blog-full p-0">
                                    <ul class="unorder-list mb-20">
                                        <li>
                                            <b>Rabies Case Tracking </b> <br>
                                            Real-time recording and monitoring of rabies cases reported from
                                            healthcare
                                            facilities across the country.
                                        </li>
                                        <li>
                                            <b> Geographic Mapping </b> <br>
                                            Integration of geographical information system (GIS) to visualize the
                                            distribution of
                                            rabies cases and identify high-risk areas.
                                        </li>

                                        <li>
                                            <b> Vaccination Status </b> <br>

                                            Tracking the administration of pre-exposure and post-exposure
                                            prophylaxis to
                                            individuals who have been exposed to potentially rabid animals.
                                        </li>
                                        <li>
                                            <b> Epidemiological Trends </b> <br>

                                            Analysis of data to identify patterns, trends, and potential outbreaks
                                            for timely
                                            response and preventive measures.
                                        </li>

                                        <li>
                                            <b>Reporting and Alert Mechanism </b> <br>

                                            Streamlined reporting and notification system for immediate response to
                                            suspected rabies cases.
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <h4 class="title mb-17">Animal Health Component Dashboard </h4>

                        <div class="desc">
                            The Animal Health Component Dashboard will focus on monitoring rabies cases and
                            vaccination efforts within animal populations. It will integrate data from veterinary
                            clinics, animal shelters, and relevant government agencies to create a comprehensive
                            overview. The main features of this dashboard will include:

                            <div class="blog-deatails mt-3">
                                <div class="blog-full p-0">
                                    <ul class="unorder-list mb-20">
                                        <li>
                                            <b>Rabies Surveillance</b> Monitoring and analysis of rabies cases in
                                            animals, including
                                            domestic pets and wildlife, to detect potential outbreaks.
                                        </li>
                                        <li>
                                            <b>Vaccination Coverage </b> Tracking the implementation of mass
                                            vaccination campaigns and
                                            ensuring optimal coverage of targeted animal populations.
                                        </li>
                                        <li>
                                            <b>Stray Animal Control</b> Recording efforts and outcomes of stray
                                            animal control programs
                                            to minimize rabies transmission.
                                        </li>
                                        <li>
                                            <b> Laboratory Data Integration</b> Incorporating data from veterinary
                                            diagnostic laboratories
                                            to confirm rabies cases and study the virus strains.
                                        </li>

                                    </ul>
                                </div>
                            </div>


                        </div>

                    </div>
                </div> -->
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection