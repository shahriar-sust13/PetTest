

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('/css/select.css') }}" rel="stylesheet">
@include('font')

<div class="cont_select_center">

  <!-- Custom select structure --> 
<div class="select_mate text-center" data-mate-select="active" >
<select name="" onchange="" onclick="return false;" id="">
<option value="" class="text-center">Post Type</option>
<option value="1" class="text-center">All</option>
<option value="2" class="text-center">Adoption</option>
<option value="3" class="text-center">Sell</option>
<option value="3" class="text-center">Story</option>
  </select>
<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
    <path d="M0-.75h24v24H0z" fill="none"/>
</svg></span>
<div class="cont_list_select_mate">
  <ul class="cont_select_int">  </ul> 
</div>
  </div>
  <!-- Custom select structure --> 


</div> <!-- End div center   -->

<script src="{{ url('js/select.js') }}" type="text/javascript"></script>	