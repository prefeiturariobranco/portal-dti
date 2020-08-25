@if( session()->has('erro_msg'))

<input type="hidden" id="system_error" value="{{session()->get('erro_msg')['error']}}">
<input type="hidden" id="system_msg" value="{{session()->get('erro_msg')['msg']}}">

@endif
