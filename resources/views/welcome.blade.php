@extends('layouts.master')

@section('style')
<style media="screen">
  body {background : green; color : white;}
</style>
@endsection

@section('content')
  @include('partials.footer')
@endsection

@section('script')
<script type="text/javascript">
  alert('저는 자식 뷰의 "script" 섹션입니다');
</script>
@endsection
