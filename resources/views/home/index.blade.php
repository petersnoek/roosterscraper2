@extends('template.layout')

@section('content')

    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <select id="selectgroepen" multiple style="width: 100%; height:30px;   ">
                <option>MBIAO*</option>
                <option>MBIAO17*</option>
                <option>MBIAO17A0</option>
                <option>MBIAO17A1</option>
                <option>MBIAO17A2</option>
                <option>MBIAO16A1</option>
                <option>MBIAO16A2</option>
                <option>MBIAO15A0</option>
                <option>MBTBO17B0</option>
                <option>MBTBO16B0</option>
                <option>MBTBO15B0</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="selectdocenten" multiple style="width: 100%; height:30px;   ">
                <option>SNP</option>
                <option>HRR</option>
                <option>VPP</option>
                <option>MRC</option>
                <option>WEN</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="selectlokalen" multiple style="width: 100%; height:30px;   ">
                <option>MB.0A170</option>
                <option>MB.0A170B</option>
                <option>MB.0A173</option>
                <option>MB.0A160</option>
                <option>MB.0A180</option>
                <option>MB.0A180B</option>
                <option>MB.0D180</option>
                <option>MB.0D190</option>
                <option>MB.1D170</option>

            </select>
        </div>
    </div>

    <div class="row">

    </div>




@endsection