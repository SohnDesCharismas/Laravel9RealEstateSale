<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
        <form class="form-a" action="{{'getproduct'}}" method="post">
            @csrf
            @livewire('search')
            <button type="submit" class="btn btn-b">Search Property</button>
        </form>
        @livewireScripts
    </div>
</div>
<!--/ Form Search End /-->

