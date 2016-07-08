@extends('layout')
@section('content')
<section ng-app="angularApp" ng-controller="myCtrl" class="header">
    <form action="/amiright" method="post">
    <div class="container">
       <div class="col-lg-12 text-center">
            <h1>Hi,</h1>
            <span class="input input--kuro">
		      <input name="textbox[]" id="userName"  ng-model="userName" ng-click="clearValue()"
 class="input__field input__field--kuro" type="text" id="input-7">
		          <label class="input__label input__label--kuro" for="input-7">
		              <span class="input__label-content input__label-content--kuro">@{{ userName }}</span>
		          </label>
		    </span>
        <h2>Type in 3 Words that describes me.</h3>
        <div class="col-lg-12">
        <div class="col-lg-4">
            
            <span class="input input--minoru">
            <input name="textbox[]" ng-model="textbox.input1" model-value="textbox.input1" class="input__field input__field--minoru" type="text" id="name">
            <label class="input__label input__label--minoru" for="name">
                <span class="input__label-content input__label-content--minoru"></span>
            </label>
        </span>
        </div>
       <div class="col-lg-4">
        <span class="input input--minoru">
            <input name="textbox[]" ng-model="textbox.input2" model-value="textbox.input2"  class="input__field input__field--minoru" type="text" id="input-14">
            <label class="input__label input__label--minoru" for="input-14">
                <span class="input__label-content input__label-content--minoru"></span>
            </label>
        </span>
        </div>
        <div class="col-lg-4">
        <span class="input input--minoru">
            <input name="textbox[]" ng-model="textbox.input3" model-value="textbox.input3"s class="input__field input__field--minoru" type="text" id="input-15">
            <label class="input__label input__label--minoru" for="input-15">
                <span class="input__label-content input__label-content--minoru"></span>
            </label>
        </span>
        </div>
        </div>
            <div class="col-lg-12 text-left">
               <blockquote> <h1><q>Kabilan, You are <span ng-bind="vovelCheck(textbox.input1)"></span> @{{ textbox.input1 +', ' }}<span ng-bind="vovelCheck(textbox.input2)"></span> @{{ textbox.input2 +' and ' }}<span ng-bind="vovelCheck(textbox.input3)"></span> @{{ textbox.input3 }}</q></h1></blockquote>
                <h2 class="text-center">@{{'-' + userName }}</h2>
            </div>
        </div>   
         <div class="col-lg-12 col-lg-offset-0 text-center"><button type="submit" class="button button--moema button--text-thick button--text-upper button--size-s">Am I right ?</button><a href="https://www.facebook.com/dialog/feed?
  app_id=145634995501895
  &amp;display=popup&amp;caption=@{{userName}}'s%20comment%20on%20Kabilan%20Senapathy
  &amp;link=https%3A%2F%2Fdev.kabilansenapathy.com%2Fdocs%2F
  &amp;redirect_uri=https%3A%2F%2Fdevelopers.facebook.com%2Ftools%2Fexplorer" target="_blank" class="button button--itzel button--size-l button--border-thin button--text-thin"><i class="button__icon fa fa-share icon-envelope"></i><span>Shut Up and Share This !</span></a><a href="">test</a>
    </div>        
    </div>
</form>
    

</section>
<section class="section1">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h1 class="section-heading">The Words Go Like This</h1>
        </div>
    </div>
</section>


@stop