@extends('website.layout')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> {{ _lang('Home') }}</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ _lang('Archive') }}</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<main class="page_main_wrapper">

<div class="container">
</div>
<section>

<div class="container">
<div class="row">
<h1 class="page-title" style="text-align:center;">
আর্কাইভ
</h1>
</div>
</div>
</section>
<section class="archive-news">
    <div class="container">
        <div class="row has-sidebar">

            <div class="col-md-9">
<div id="filter-form" class="">
<div class="archive_form_area">
<form action="{{route('archive')}}" method="POST">@csrf
<div class="form-group">
<label>দিন:</label>
<input class="form-control date-picker" type="date" autocomplete="off" name="date">
</div>
<div class="form-group col-md-4">
<label>স্টেটঃ</label>
<select name="division_id" id="division_select" class="form-control form-control-inline">
<option value="-1">স্টেট সেলেক্ট করুন</option>
<option value="1">বরিশাল</option>
<option value="2">চট্টগ্রাম</option>
<option value="3">ঢাকা</option>
<option value="4">খুলনা</option>
<option value="5">রাজশাহী</option>
<option value="6">রংপুর</option>
<option value="7">সিলেট</option>
<option value="8">ময়মনসিংহ</option>
</select>
</div>
<div class="form-group col-md-4">
<label>সিটিঃ</label>
<select name="district_id" id="district_select" class="form-control form-control-inline">
<option division="3" value="1">ঢাকা</option>
<option division="3" value="2">ফরিদপুর</option>
<option division="3" value="3">গাজীপুর</option>
<option division="3" value="4">গোপালগঞ্জ</option>
<option division="8" value="5">জামালপুর</option>
<option division="3" value="6">কিশোরগঞ্জ</option>
<option division="3" value="7">মাদারীপুর</option>
<option division="3" value="8">মানিকগঞ্জ</option>
<option division="3" value="9">মুন্সিগঞ্জ</option>
<option division="8" value="10">ময়মনসিংহ</option>
<option division="3" value="11">নারায়ণগঞ্জ</option>
<option division="3" value="12">নরসিংদী</option>
<option division="8" value="13">নেত্রকোনা</option>
<option division="3" value="14">রাজবাড়ী</option>
<option division="3" value="15">শরীয়তপুর</option>
<option division="8" value="16">শেরপুর</option>
<option division="3" value="17">টাঙ্গাইল</option>
<option division="5" value="18">বগুড়া</option>
<option division="5" value="19">জয়পুরহাট</option>
<option division="5" value="20">নওগাঁ</option>
<option division="5" value="21">নাটোর</option>
<option division="5" value="22">চাঁপাইনবাবগঞ্জ</option>
<option division="5" value="23">পাবনা</option>
<option division="5" value="24">রাজশাহী</option>
<option division="5" value="25">সিরাজগঞ্জ</option>
<option division="6" value="26">দিনাজপুর</option>
<option division="6" value="27">গাইবান্ধা</option>
<option division="6" value="28">কুড়িগ্রাম</option>
<option division="6" value="29">লালমনিরহাট</option>
<option division="6" value="30">নীলফামারী</option>
<option division="6" value="31">পঞ্চগড়</option>
<option division="6" value="32">রংপুর</option>
<option division="6" value="33">ঠাকুরগাঁও</option>
<option division="1" value="34">বরগুনা</option>
<option division="1" value="35">বরিশাল</option>
<option division="1" value="36">ভোলা</option>
<option division="1" value="37">ঝালকাঠি</option>
<option division="1" value="38">পটুয়াখালী</option>
<option division="1" value="39">পিরোজপুর</option>
<option division="2" value="40">বান্দরবান</option>
<option division="2" value="41">ব্রাহ্মণবাড়িয়া</option>
<option division="2" value="42">চাঁদপুর</option>
<option division="2" value="43">চট্টগ্রাম</option>
<option division="2" value="44">কুমিল্লা</option>
<option division="2" value="45">কক্সবাজার</option>
<option division="2" value="46">ফেনী</option>
<option division="2" value="47">খাগড়াছড়ি</option>
<option division="2" value="48">লক্ষ্মীপুর</option>
<option division="2" value="49">নোয়াখালী</option>
<option division="2" value="50">রাঙামাটি</option>
<option division="7" value="51">হবিগঞ্জ</option>
<option division="7" value="52">মৌলভীবাজার</option>
<option division="7" value="53">সুনামগঞ্জ</option>
<option division="7" value="54">সিলেট</option>
<option division="4" value="55">বাগেরহাট</option>
<option division="4" value="56">চুয়াডাঙ্গা</option>
<option division="4" value="57">যশোর</option>
<option division="4" value="58">ঝিনাইদহ</option>
<option division="4" value="59">খুলনা</option>
<option division="4" value="60">কুষ্টিয়া</option>
<option division="4" value="61">মাগুরা</option>
<option division="4" value="62">মেহেরপুর</option>
<option division="4" value="63">নড়াইল</option>
<option division="4" value="64">সাতক্ষীরা</option>
<option value="-1">সিটি নেই</option>
</select>
</div>
<div class="form-group col-md-4">
<label>টাউনশিপঃ</label>
<select name="upazila_id" id="upazila_select" class="form-control form-control-inline">
<option district="34" value="1">আমতলী</option>
 <option district="34" value="2">বামনা</option>
<option district="34" value="3">বরগুনা সদর</option>
<option district="34" value="4">বেতাগি</option>
<option district="34" value="5">পাথরঘাটা</option>
<option district="34" value="6">তালতলী</option>
<option district="35" value="7">মুলাদি</option>
<option district="35" value="8">বাবুগঞ্জ</option>
<option district="35" value="9">আগাইলঝরা</option>
<option district="35" value="10">বরিশাল সদর</option>
<option district="35" value="11">বাকেরগঞ্জ</option>
<option district="35" value="12">বানাড়িপারা</option>
<option district="35" value="13">গৌরনদী</option>
<option district="35" value="14">হিজলা</option>
<option district="35" value="15">মেহেদিগঞ্জ </option>
<option district="35" value="16">ওয়াজিরপুর</option>
<option district="36" value="17">ভোলা সদর</option>
<option district="36" value="18">বুরহানউদ্দিন</option>
<option district="36" value="19">চর ফ্যাশন</option>
<option district="36" value="20">দৌলতখান</option>
<option district="36" value="21">লালমোহন</option>
<option district="36" value="22">মনপুরা</option>
<option district="36" value="23">তাজুমুদ্দিন</option>
<option district="37" value="24">ঝালকাঠি সদর</option>
<option district="37" value="25">কাঁঠালিয়া</option>
<option district="37" value="26">নালচিতি</option>
<option district="37" value="27">রাজাপুর</option>
<option district="38" value="28">বাউফল</option>
<option district="38" value="29">দশমিনা</option>
<option district="38" value="30">গলাচিপা</option>
<option district="38" value="31">কালাপারা</option>
<option district="38" value="32">মির্জাগঞ্জ </option>
<option district="38" value="33">পটুয়াখালী সদর</option>
<option district="38" value="34">ডুমকি</option>
<option district="38" value="35">রাঙ্গাবালি</option>
<option district="39" value="36">ভ্যান্ডারিয়া</option>
<option district="39" value="37">কাউখালি</option>
<option district="39" value="38">মাঠবাড়িয়া</option>
<option district="39" value="39">নাজিরপুর</option>
<option district="39" value="40">নেসারাবাদ</option>
<option district="39" value="41">পিরোজপুর সদর</option>
<option district="39" value="42">জিয়ানগর</option>
<option district="40" value="43">বান্দরবন সদর</option>
<option district="40" value="44">থানচি</option>
<option district="40" value="45">লামা</option>
<option district="40" value="46">নাইখংছড়ি </option>
<option district="40" value="47">আলী কদম</option>
<option district="40" value="48">রউয়াংছড়ি </option>
 <option district="40" value="49">রুমা</option>
<option district="41" value="50">ব্রাহ্মণবাড়িয়া সদর</option>
<option district="41" value="51">আশুগঞ্জ</option>
<option district="41" value="52">নাসির নগর</option>
<option district="41" value="53">নবীনগর</option>
<option district="41" value="54">সরাইল</option>
<option district="41" value="55">শাহবাজপুর টাউন</option>
<option district="41" value="56">কসবা</option>
<option district="41" value="57">আখাউরা</option>
<option district="41" value="58">বাঞ্ছারামপুর</option>
<option district="41" value="59">বিজয় নগর</option>
<option district="42" value="60">চাঁদপুর সদর</option>
<option district="42" value="61">ফরিদগঞ্জ</option>
<option district="42" value="62">হাইমচর</option>
<option district="42" value="63">হাজীগঞ্জ</option>
<option district="42" value="64">কচুয়া</option>
<option district="42" value="65">মতলব উত্তর</option>
<option district="42" value="66">মতলব দক্ষিণ</option>
<option district="42" value="67">শাহরাস্তি</option>
<option district="43" value="68">আনোয়ারা</option>
<option district="43" value="69">বাশখালি</option>
<option district="43" value="70">বোয়ালখালি</option>
<option district="43" value="71">চন্দনাইশ</option>
<option district="43" value="72">ফটিকছড়ি</option>
<option district="43" value="73">হাঠহাজারী</option>
<option district="43" value="74">লোহাগারা</option>
<option district="43" value="75">মিরসরাই</option>
<option district="43" value="76">পটিয়া</option>
<option district="43" value="77">রাঙ্গুনিয়া</option>
<option district="43" value="78">রাউজান</option>
<option district="43" value="79">সন্দ্বীপ</option>
<option district="43" value="80">সাতকানিয়া</option>
<option district="43" value="81">সীতাকুণ্ড</option>
<option district="44" value="82">বড়ুরা</option>
<option district="44" value="83">ব্রাহ্মণপাড়া</option>
<option district="44" value="84">বুড়িচং</option>
<option district="44" value="85">চান্দিনা</option>
<option district="44" value="86">চৌদ্দগ্রাম</option>
<option district="44" value="87">দাউদকান্দি</option>
<option district="44" value="88">দেবীদ্বার</option>
<option district="44" value="89">হোমনা</option>
<option district="44" value="90">কুমিল্লা সদর</option>
<option district="44" value="91">লাকসাম</option>
<option district="44" value="92">মনোহরগঞ্জ</option>
<option district="44" value="93">মেঘনা</option>
<option district="44" value="94">মুরাদনগর</option>
<option district="44" value="95">নাঙ্গালকোট</option>
 <option district="44" value="96">কুমিল্লা সদর দক্ষিণ</option>
<option district="44" value="97">তিতাস</option>
<option district="45" value="98">চকরিয়া</option>
<option district="45" value="100">কক্স বাজার সদর</option>
<option district="45" value="101">কুতুবদিয়া</option>
<option district="45" value="102">মহেশখালী</option>
<option district="45" value="103">রামু</option>
<option district="45" value="104">টেকনাফ</option>
<option district="45" value="105">উখিয়া</option>
<option district="45" value="106">পেকুয়া</option>
<option district="46" value="107">ফেনী সদর</option>
<option district="46" value="108">ছাগল নাইয়া</option>
<option district="46" value="109">দাগানভিয়া</option>
<option district="46" value="110">পরশুরাম</option>
<option district="46" value="111">ফুলগাজি</option>
<option district="46" value="112">সোনাগাজি</option>
<option district="47" value="113">দিঘিনালা </option>
<option district="47" value="114">খাগড়াছড়ি</option>
<option district="47" value="115">লক্ষ্মীছড়ি</option>
<option district="47" value="116">মহলছড়ি</option>
<option district="47" value="117">মানিকছড়ি</option>
<option district="47" value="118">মাটিরাঙ্গা</option>
<option district="47" value="119">পানছড়ি</option>
<option district="47" value="120">রামগড়</option>
<option district="48" value="121">লক্ষ্মীপুর সদর</option>
<option district="48" value="122">রায়পুর</option>
<option district="48" value="123">রামগঞ্জ</option>
<option district="48" value="124">রামগতি</option>
<option district="48" value="125">কমল নগর</option>
<option district="49" value="126">নোয়াখালী সদর</option>
<option district="49" value="127">বেগমগঞ্জ</option>
<option district="49" value="128">চাটখিল</option>
<option district="49" value="129">কোম্পানীগঞ্জ</option>
<option district="49" value="130">শেনবাগ</option>
<option district="49" value="131">হাতিয়া</option>
<option district="49" value="132">কবিরহাট </option>
<option district="49" value="133">সোনাইমুরি</option>
<option district="49" value="134">সুবর্ণ চর </option>
<option district="50" value="135">রাঙ্গামাটি সদর</option>
<option district="50" value="136">বেলাইছড়ি</option>
<option district="50" value="137">বাঘাইছড়ি</option>
<option district="50" value="138">বরকল</option>
<option district="50" value="139">জুরাইছড়ি</option>
<option district="50" value="140">রাজাস্থলি</option>
<option district="50" value="141">কাপ্তাই</option>
<option district="50" value="142">লাঙ্গাডু</option>
<option district="50" value="143">নান্নেরচর </option>
<option district="50" value="144">কাউখালি</option>
<option district="1" value="145">ধামরাই</option>
<option district="1" value="146">দোহার</option>
<option district="1" value="147">কেরানীগঞ্জ</option>
<option district="1" value="148">নবাবগঞ্জ</option>
<option district="1" value="149">সাভার</option>
<option district="2" value="150">ফরিদপুর সদর</option>
<option district="2" value="151">বোয়ালমারী</option>
<option district="2" value="152">আলফাডাঙ্গা</option>
<option district="2" value="153">মধুখালি</option>
<option district="2" value="154">ভাঙ্গা</option>
<option district="2" value="155">নগরকান্ড</option>
<option district="2" value="156">চরভদ্রাসন </option>
<option district="2" value="157">সদরপুর</option>
<option district="2" value="158">শালথা</option>
<option district="3" value="159">গাজীপুর সদর</option>
<option district="3" value="160">কালিয়াকৈর</option>
<option district="3" value="161">কাপাসিয়া</option>
<option district="3" value="162">শ্রীপুর</option>
<option district="3" value="163">কালীগঞ্জ</option>
<option district="3" value="164">টঙ্গি</option>
<option district="4" value="165">গোপালগঞ্জ সদর</option>
<option district="4" value="166">কাশিয়ানি</option>
<option district="4" value="167">কোটালিপাড়া</option>
<option district="4" value="168">মুকসুদপুর</option>
<option district="4" value="169">টুঙ্গিপাড়া</option>
<option district="5" value="170">দেওয়ানগঞ্জ</option>
<option district="5" value="171">বকসিগঞ্জ</option>
<option district="5" value="172">ইসলামপুর</option>
<option district="5" value="173">জামালপুর সদর</option>
<option district="5" value="174">মাদারগঞ্জ</option>
<option district="5" value="175">মেলানদাহা</option>
<option district="5" value="176">সরিষাবাড়ি </option>
<option district="5" value="177">নারুন্দি</option>
<option district="6" value="178">অষ্টগ্রাম</option>
<option district="6" value="179">বাজিতপুর</option>
<option district="6" value="180">ভৈরব</option>
<option district="6" value="181">হোসেনপুর </option>
<option district="6" value="182">ইটনা</option>
<option district="6" value="183">করিমগঞ্জ</option>
<option district="6" value="184">কতিয়াদি</option>
<option district="6" value="185">কিশোরগঞ্জ সদর</option>
<option district="6" value="186">কুলিয়ারচর</option>
<option district="6" value="187">মিঠামাইন</option>
<option district="6" value="188">নিকলি</option>
<option district="6" value="189">পাকুন্ডা</option>
<option district="6" value="190">তাড়াইল</option>
<option district="7" value="191">মাদারীপুর সদর</option>
<option district="7" value="192">কালকিনি</option>
<option district="7" value="193">রাজইর</option>
<option district="7" value="194">শিবচর</option>
<option district="8" value="195">মানিকগঞ্জ সদর</option>
<option district="8" value="196">সিঙ্গাইর</option>
<option district="8" value="197">শিবালয়</option>
<option district="8" value="198">সাঠুরিয়া</option>
<option district="8" value="199">হরিরামপুর</option>
<option district="8" value="200">ঘিওর</option>
<option district="8" value="201">দৌলতপুর</option>
<option district="9" value="202">লোহাজং</option>
<option district="9" value="203">শ্রীনগর</option>
<option district="9" value="204">মুন্সিগঞ্জ সদর</option>
<option district="9" value="205">সিরাজদিখান</option>
<option district="9" value="206">টঙ্গিবাড়ি</option>
<option district="9" value="207">গজারিয়া</option>
<option district="10" value="208">ভালুকা</option>
<option district="10" value="209">ত্রিশাল</option>
<option district="10" value="210">হালুয়াঘাট</option>
<option district="10" value="211">মুক্তাগাছা</option>
<option district="10" value="212">ধবারুয়া</option>
<option district="10" value="213">ফুলবাড়িয়া</option>
<option district="10" value="214">গফরগাঁও</option>
<option district="10" value="215">গৌরিপুর</option>
<option district="10" value="216">ঈশ্বরগঞ্জ</option>
<option district="10" value="217">ময়মনসিং সদর</option>
<option district="10" value="218">নন্দাইল</option>
<option district="10" value="219">ফুলপুর</option>
<option district="11" value="220">আড়াইহাজার</option>
<option district="11" value="221">সোনারগাঁও</option>
<option district="11" value="222">বান্দার</option>
<option district="11" value="223">নারায়ানগঞ্জ সদর</option>
<option district="11" value="224">রূপগঞ্জ</option>
<option district="11" value="225">সিদ্ধিরগঞ্জ</option>
<option district="12" value="226">বেলাবো</option>
<option district="12" value="227">মনোহরদি</option>
<option district="12" value="228">নরসিংদী সদর</option>
<option district="12" value="229">পলাশ</option>
<option district="12" value="230">রায়পুর</option>
<option district="12" value="231">শিবপুর</option>
<option district="13" value="232">কেন্দুয়া</option>
<option district="13" value="233">আটপাড়া</option>
<option district="13" value="234">বরহাট্টা</option>
<option district="13" value="235">দুর্গাপুর</option>
<option district="13" value="236">কলমাকান্দা</option>
<option district="13" value="237">মদন</option>
<option district="13" value="238">মোহনগঞ্জ</option>
<option district="13" value="239">নেত্রকোনা সদর</option>
<option district="13" value="240">পূর্বধলা</option>
<option district="13" value="241">খালিয়াজুরি</option>
<option district="14" value="242">বালিয়াকান্দি</option>
<option district="14" value="243">গোয়ালন্দ ঘাট</option>
<option district="14" value="244">পাংশা</option>
<option district="14" value="245">কালুখালি</option>
<option district="14" value="246">রাজবাড়ি সদর</option>
<option district="15" value="247">শরীয়তপুর সদর </option>
<option district="15" value="248">দামুদিয়া</option>
<option district="15" value="249">নড়িয়া</option>
<option district="15" value="250">জাজিরা</option>
<option district="15" value="251">ভেদারগঞ্জ</option>
<option district="15" value="252">গোসাইর হাট </option>
<option district="16" value="253">ঝিনাইগাতি</option>
<option district="16" value="254">নাকলা</option>
<option district="16" value="255">নালিতাবাড়ি</option>
<option district="16" value="256">শেরপুর সদর</option>
<option district="16" value="257">শ্রীবরদি</option>
<option district="17" value="258">টাঙ্গাইল সদর</option>
<option district="17" value="259">সখিপুর</option>
<option district="17" value="260">বসাইল</option>
<option district="17" value="261">মধুপুর</option>
<option district="17" value="262">ঘাটাইল</option>
<option district="17" value="263">কালিহাতি</option>
<option district="17" value="264">নগরপুর</option>
<option district="17" value="265">মির্জাপুর</option>
<option district="17" value="266">গোপালপুর</option>
<option district="17" value="267">দেলদুয়ার</option>
<option district="17" value="268">ভুয়াপুর</option>
<option district="17" value="269">ধানবাড়ি</option>
<option district="55" value="270">বাগেরহাট সদর</option>
<option district="55" value="271">চিতলমাড়ি</option>
<option district="55" value="272">ফকিরহাট</option>
<option district="55" value="273">কচুয়া</option>
<option district="55" value="274">মোল্লাহাট </option>
<option district="55" value="275">মংলা</option>
<option district="55" value="276">মরেলগঞ্জ</option>
<option district="55" value="277">রামপাল</option>
<option district="55" value="278">স্মরণখোলা</option>
<option district="56" value="279">দামুরহুদা</option>
<option district="56" value="280">চুয়াডাঙ্গা সদর</option>
<option district="56" value="281">জীবন নগর </option>
<option district="56" value="282">আলমডাঙ্গা</option>
<option district="57" value="283">অভয়নগর</option>
<option district="57" value="284">কেশবপুর</option>
<option district="57" value="285">বাঘের পাড়া </option>
<option district="57" value="286">যশোর সদর</option>
<option district="57" value="287">চৌগাছা</option>
<option district="57" value="288">মনিরামপুর </option>
<option district="57" value="289">ঝিকরগাছা</option>
<option district="57" value="290">সারশা</option>
<option district="58" value="291">ঝিনাইদহ সদর</option>
<option district="58" value="292">মহেশপুর</option>
<option district="58" value="293">কালীগঞ্জ</option>
<option district="58" value="294">কোট চাঁদপুর </option>
<option district="58" value="295">শৈলকুপা</option>
<option district="58" value="296">হাড়িনাকুন্দা</option>
<option district="59" value="297">তেরোখাদা</option>
<option district="59" value="298">বাটিয়াঘাটা </option>
<option district="59" value="299">ডাকপে</option>
<option district="59" value="300">ডুমুরিয়া</option>
<option district="59" value="301">দিঘলিয়া</option>
<option district="59" value="302">কয়ড়া</option>
<option district="59" value="303">পাইকগাছা</option>
<option district="59" value="304">ফুলতলা</option>
<option district="59" value="305">রূপসা</option>
<option district="60" value="306">কুষ্টিয়া সদর</option>
<option district="60" value="307">কুমারখালি</option>
<option district="60" value="308">দৌলতপুর</option>
<option district="60" value="309">মিরপুর</option>
<option district="60" value="310">ভেরামারা</option>
<option district="60" value="311">খোকসা</option>
<option district="61" value="312">মাগুরা সদর</option>
<option district="61" value="313">মোহাম্মাদপুর</option>
<option district="61" value="314">শালিখা</option>
<option district="61" value="315">শ্রীপুর</option>
<option district="62" value="316">আংনি</option>
<option district="62" value="317">মুজিব নগর</option>
<option district="62" value="318">মেহেরপুর সদর</option>
<option district="63" value="319">নড়াইল সদর</option>
<option district="63" value="320">লোহাগাড়া</option>
<option district="63" value="321">কালিয়া</option>
<option district="64" value="322">সাতক্ষীরা সদর</option>
<option district="64" value="323">আসসাশুনি </option>
<option district="64" value="324">দেভাটা</option>
<option district="64" value="325">তালা</option>
<option district="64" value="326">কলরোয়া</option>
<option district="64" value="327">কালীগঞ্জ</option>
<option district="64" value="328">শ্যামনগর</option>
<option district="18" value="329">আদমদিঘী</option>
<option district="18" value="330">বগুড়া সদর</option>
<option district="18" value="331">শেরপুর</option>
<option district="18" value="332">ধুনট</option>
<option district="18" value="333">দুপচাচিয়া</option>
<option district="18" value="334">গাবতলি</option>
<option district="18" value="335">কাহালু</option>
<option district="18" value="336">নন্দিগ্রাম</option>
<option district="18" value="337">শাহজাহানপুর</option>
<option district="18" value="338">সারিয়াকান্দি</option>
<option district="18" value="339">শিবগঞ্জ</option>
<option district="18" value="340">সোনাতলা</option>
<option district="19" value="341">জয়পুরহাট সদর</option>
<option district="19" value="342">আক্কেলপুর</option>
<option district="19" value="343">কালাই</option>
<option district="19" value="344">খেতলাল</option>
<option district="19" value="345">পাঁচবিবি</option>
<option district="20" value="346">নওগাঁ সদর</option>
<option district="20" value="347">মহাদেবপুর</option>
<option district="20" value="348">মান্দা</option>
<option district="20" value="349">নিয়ামতপুর</option>
<option district="20" value="350">আত্রাই</option>
<option district="20" value="351">রাণীনগর</option>
<option district="20" value="352">পত্নীতলা</option>
<option district="20" value="353">ধামইরহাট </option>
<option district="20" value="354">সাপাহার</option>
<option district="20" value="355">পোরশা</option>
<option district="20" value="356">বদলগাছি</option>
<option district="21" value="357">নাটোর সদর</option>
<option district="21" value="358">বড়াইগ্রাম</option>
<option district="21" value="359">বাগাতিপাড়া</option>
<option district="21" value="360">লালপুর</option>
<option district="21" value="361">নাটোর সদর</option>
<option district="21" value="362">বড়াই গ্রাম</option>
<option district="22" value="363">ভোলাহাট</option>
<option district="22" value="364">গোমস্তাপুর</option>
<option district="22" value="365">নাচোল</option>
<option district="22" value="366">নবাবগঞ্জ সদর</option>
<option district="22" value="367">শিবগঞ্জ</option>
<option district="23" value="368">আটঘরিয়া</option>
<option district="23" value="369">বেড়া</option>
<option district="23" value="370">ভাঙ্গুরা</option>
<option district="23" value="371">চাটমোহর</option>
<option district="23" value="372">ফরিদপুর</option>
<option district="23" value="373">ঈশ্বরদী</option>
<option district="23" value="374">পাবনা সদর</option>
<option district="23" value="375">সাথিয়া</option>
<option district="23" value="376">সুজানগর</option>
<option district="24" value="377">বাঘা</option>
 <option district="24" value="378">বাগমারা</option>
<option district="24" value="379">চারঘাট</option>
<option district="24" value="380">দুর্গাপুর</option>
<option district="24" value="381">গোদাগারি</option>
<option district="24" value="382">মোহনপুর</option>
<option district="24" value="383">পবা</option>
<option district="24" value="384">পুঠিয়া</option>
<option district="24" value="385">তানোর</option>
<option district="25" value="386">সিরাজগঞ্জ সদর</option>
<option district="25" value="387">বেলকুচি</option>
<option district="25" value="388">চৌহালি</option>
<option district="25" value="389">কামারখান্দা</option>
<option district="25" value="390">কাজীপুর</option>
<option district="25" value="391">রায়গঞ্জ</option>
<option district="25" value="392">শাহজাদপুর</option>
<option district="25" value="393">তারাশ</option>
<option district="25" value="394">উল্লাপাড়া</option>
<option district="26" value="395">বিরামপুর</option>
<option district="26" value="396">বীরগঞ্জ</option>
<option district="26" value="397">বিড়াল</option>
<option district="26" value="398">বোচাগঞ্জ</option>
<option district="26" value="399">চিরিরবন্দর</option>
<option district="26" value="400">ফুলবাড়ি</option>
<option district="26" value="401">ঘোড়াঘাট</option>
<option district="26" value="402">হাকিমপুর</option>
<option district="26" value="403">কাহারোল</option>
<option district="26" value="404">খানসামা</option>
<option district="26" value="405">দিনাজপুর সদর</option>
<option district="26" value="406">নবাবগঞ্জ</option>
<option district="26" value="407">পার্বতীপুর</option>
<option district="27" value="408">ফুলছড়ি</option>
<option district="27" value="409">গাইবান্ধা সদর</option>
<option district="27" value="410">গোবিন্দগঞ্জ</option>
<option district="27" value="411">পলাশবাড়ী</option>
<option district="27" value="412">সাদুল্যাপুর</option>
<option district="27" value="413">সাঘাটা</option>
<option district="27" value="414">সুন্দরগঞ্জ</option>
<option district="28" value="415">কুড়িগ্রাম সদর</option>
<option district="28" value="416">নাগেশ্বরী</option>
<option district="28" value="417">ভুরুঙ্গামারি</option>
<option district="28" value="418">ফুলবাড়ি</option>
<option district="28" value="419">রাজারহাট</option>
<option district="28" value="420">উলিপুর</option>
<option district="28" value="421">চিলমারি</option>
<option district="28" value="422">রউমারি</option>
<option district="28" value="423">চর রাজিবপুর</option>
<option district="29" value="424">লালমনিরহাট সদর</option>
<option district="29" value="425">আদিতমারি</option>
<option district="29" value="426">কালীগঞ্জ</option>
<option district="29" value="427">হাতিবান্ধা</option>
<option district="29" value="428">পাটগ্রাম</option>
<option district="30" value="429">নীলফামারী সদর</option>
<option district="30" value="430">সৈয়দপুর</option>
<option district="30" value="431">জলঢাকা</option>
<option district="30" value="432">কিশোরগঞ্জ</option>
<option district="30" value="433">ডোমার</option>
<option district="30" value="434">ডিমলা</option>
<option district="31" value="435">পঞ্চগড় সদর</option>
<option district="31" value="436">দেবীগঞ্জ</option>
<option district="31" value="437">বোদা</option>
<option district="31" value="438">আটোয়ারি</option>
<option district="31" value="439">তেতুলিয়া</option>
<option district="32" value="440">বদরগঞ্জ</option>
<option district="32" value="441">মিঠাপুকুর</option>
<option district="32" value="442">গঙ্গাচরা</option>
<option district="32" value="443">কাউনিয়া</option>
<option district="32" value="444">রংপুর সদর</option>
<option district="32" value="445">পীরগাছা</option>
<option district="32" value="446">পীরগঞ্জ</option>
<option district="32" value="447">তারাগঞ্জ</option>
<option district="33" value="448">ঠাকুরগাঁও সদর</option>
<option district="33" value="449">পীরগঞ্জ</option>
<option district="33" value="450">বালিয়াডাঙ্গি</option>
<option district="33" value="451">হরিপুর</option>
<option district="33" value="452">রাণীসংকইল</option>
<option district="51" value="453">আজমিরিগঞ্জ</option>
<option district="51" value="454">বানিয়াচং</option>
<option district="51" value="455">বাহুবল</option>
<option district="51" value="456">চুনারুঘাট</option>
<option district="51" value="457">হবিগঞ্জ সদর</option>
<option district="51" value="458">লাক্ষাই</option>
<option district="51" value="459">মাধবপুর</option>
<option district="51" value="460">নবীগঞ্জ</option>
<option district="51" value="461">শায়েস্তাগঞ্জ</option>
<option district="52" value="462">মৌলভীবাজার</option>
<option district="52" value="463">বড়লেখা</option>
<option district="52" value="464">জুড়ি</option>
<option district="52" value="465">কামালগঞ্জ</option>
<option district="52" value="466">কুলাউরা</option>
<option district="52" value="467">রাজনগর</option>
 <option district="52" value="468">শ্রীমঙ্গল</option>
<option district="53" value="469">বিসশম্ভারপুর</option>
<option district="53" value="470">ছাতক</option>
<option district="53" value="471">দেড়াই</option>
<option district="53" value="472">ধরমপাশা</option>
<option district="53" value="473">দোয়ারাবাজার</option>
<option district="53" value="474">জগন্নাথপুর</option>
<option district="53" value="475">জামালগঞ্জ</option>
<option district="53" value="476">সুল্লা</option>
<option district="53" value="477">সুনামগঞ্জ সদর</option>
<option district="53" value="478">শান্তিগঞ্জ</option>
<option district="53" value="479">তাহিরপুর</option>
<option district="54" value="480">সিলেট সদর</option>
<option district="54" value="481">বেয়ানিবাজার</option>
<option district="54" value="482">বিশ্বনাথ</option>
<option district="54" value="483">দক্ষিণ সুরমা</option>
<option district="54" value="484">বালাগঞ্জ</option>
<option district="54" value="485">কোম্পানিগঞ্জ</option>
<option district="54" value="486">ফেঞ্চুগঞ্জ</option>
<option district="54" value="487">গোলাপগঞ্জ</option>
<option district="54" value="488">গোয়াইনঘাট</option>
<option district="54" value="489">জয়ন্তপুর</option>
<option district="54" value="490">কানাইঘাট</option>
<option district="54" value="491">জাকিগঞ্জ</option>
<option district="54" value="492">নবীগঞ্জ</option>
<option value="-1">বুরো/টাউনশিপ নেই</option>
</select>
</div>




<script type="text/javascript">
    var division = document.getElementById('division_select');
    var district = document.getElementById('district_select');
    var selectedDistrictId = -1;
    var selectedUpazilaId = -1;


    // when used on site.


    division.addEventListener('change', function() {
        selectedDistrictId = -1;
        filterDistricts();
    });

    district.addEventListener('change', function() {
        selectedUpazilaId = -1;
        filterUpazilas();
    });

    filterDistricts();

    function filterDistricts() {
        var division_id = division.options[division.selectedIndex].value;
        var district = document.getElementById('district_select');
        var selectedIndex;
        for (var i = 0; i < district.options.length; i++ ) {
            var option = district.options[i];
            if (option.value == selectedDistrictId) {
                selectedIndex = i;
            }

            if (option.getAttribute('division') != division_id && option.value != -1) {
                option.style.display = 'none';
            } else {
                option.style.display = null;
            }
        }

        district.selectedIndex = selectedIndex;
        filterUpazilas();
    }

    function filterUpazilas() {
        var district_id = district.options[district.selectedIndex].value;
        var upazila = document.getElementById('upazila_select');
        var selectedIndex;
        for (var i = 0; i < upazila.options.length; i++ ) {
            var option = upazila.options[i];
            if (option.value == selectedUpazilaId) {
                selectedIndex = i;
            }

            if (option.getAttribute('district') != district_id && option.value != -1) {
                option.style.display = 'none';
            } else {
                option.style.display = null;
            }
        }

        upazila.selectedIndex = selectedIndex;
    }

</script>
<div class="form-group col-md-12 ">
<input type="submit" class="btn btn-success" value="Submit">
</div>
</form>


</div>
</div>
                <div class="section-title m-t-5 m-b-10">
                    <h2>খবর</h2>
                </div>
                <div>
                    @if(!$posts->isEmpty())
                        <div class="post-items p-b-20 p-t-20 br-bottom">
                            <div class="row">
                                @foreach($posts as  $post)
                                    @if(!$post->video_type)
                                    <div class="post-item col-md-3 br-left" style="
                            height: 200px;
                            ">
                                        <a href="{{ url('post', $post->slug) }}">
                                            <figure>
                                                <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" width="130px" height="130px" alt="{{ $post->title }}">
                                            </figure>
                                            <h4 class="post-title " style="line-height: normal">{{ $post->title }}</h4>
                                        </a><br>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    @else
                        {{ _lang('No Post Found!') }}
                    @endif

                </div>

                @if(!$posts->isEmpty())
                    <div class="pagination_links">
                        <!-- Pagination -->
                        {{ $posts->links() }}
                    </div>
                @endif

</div>

            <div class="col-md-3 sidebar">

        @if(get_option('advertisement_one_status', 0))
            <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                <div class="row ">
                    <div class="col-xs-12 p-t-10">
                        <a class="post-item" href="{{ get_option('advertisement_one_link', '#') }}">
                            <figure class="img-holder">
                                {!! get_option('advertisement_one_content') !!}
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        @endif
        <div class="tabs-container p-t-10" style="height: 410px;">
            <div class="tabs-wrapper">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a class="p-5" href="#latest" aria-controls="latest" role="tab" data-toggle="tab">
                            <h3 class="no-margin no-padding">{{ _lang('Latest Post') }}</h3>
                        </a></li>
                    <li role="presentation">
                        <a class="p-5" href="#popular" aria-controls="popular" role="tab" data-toggle="tab">
                            <h3 class="no-margin no-padding">{{ _lang('Most Popular') }}</h3>
                        </a></li>
                </ul>
                <div class="tab-content" style="overflow: scroll; height: 345px;overflow-x: hidden;">
                    <div role="tabpanel" class="tab-pane fade in active" id="latest">
                        <div class="most-viewed" id="latest">
                            <div class="row mobile_list_simple ">
                                @php
                                    $posts = App\Post::orderBy('id', 'DESC')->limit(15)->get();
                                @endphp
                                @foreach($posts as $post)
                                    <div class="col-xs-12 p-t-10 p-b-10 br-bottom item">
                                        <a href="{{ url('post', $post->slug) }}">
                                            <div class="title-holder">
                                                <h3 class="post-title no-margin">{{ $post->title }}</h3>
                                            </div>
                                            <div class="category-meta">
                                                <p class="category">
                                                    @foreach($post->categories as $key => $category)
                                                        {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                                    @endforeach
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="popular">
                        <div class="most-viewed" id="most-today">
                            <div class="row mobile_list_simple ">
                                @php
                                    $most_view_posts = App\Post::select("posts.*", "post_views.views")
                                    ->join('post_views', 'posts.id', 'post_views.post_id')
                                    ->orderBy('views', 'DESC')
                                    ->limit(15)
                                    ->get();
                                @endphp
                                @foreach($most_view_posts as $post)
                                    <div class="col-xs-12 p-t-10 p-b-10 br-bottom item">
                                        <a href="{{ url('post', $post->slug) }}">
                                            <div class="title-holder">
                                                <h3 class="post-title no-margin">{{ $post->title }}</h3>
                                            </div>
                                            <div class="category-meta">
                                                <p class="category">
                                                    @foreach($post->categories as $key => $category)
                                                        {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                                    @endforeach
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-connect">
            <ul class="social--redius social--color">
                <li><a data-fb="fb_link" class="social__facebook" title="Facebook" href="{{ get_option('facebook_link') }}"><i class="fa fa-facebook"></i></a></li>
                <li><a data-twitter="twitter_link" class="social__twitter" title="Twitter" href="{{ get_option('twitter_link') }}"><i class="fa fa-twitter"></i></a></li>
                <li><a data-youtube="youtube_link" class="social__youtube" title="Youtube" href="{{ get_option('youtube_link') }}"><i class="fa fa-youtube"></i></a></li>
                <li><a data-linkedin="linkedin_link" class="social__linkedin" title="Linkedin" href="{{ get_option('linkedin_link') }}"><i class="fa fa-linkedin"></i></a></li>
                <li><a data-insta="insta_link" class="social__instagram" title="Instagram" href="{{ get_option('instagram_link') }}"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        @if(get_option('advertisement_two_status', 0))
            <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                <div class="row ">
                    <div class="col-xs-12 p-t-10">
                        <a class="post-item" href="{{ get_option('advertisement_two_link', '#') }}">
                            <figure class="img-holder">
                                {!! get_option('advertisement_two_content') !!}
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        @endif


        @if(get_option('advertisement_three_status', 0))
            <div class="advert" style="margin-bottom:20px; padding-top: 5px;">
                <div class="row ">
                    <div class="col-xs-12 p-t-10">
                        <a class="post-item" href="{{ get_option('advertisement_three_link', '#') }}">
                            <figure class="img-holder">
                                {!! get_option('advertisement_three_content') !!}
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
        </div>
    </div>
</section>
@endsection

