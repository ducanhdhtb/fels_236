<div class="col-md-3">
    <div class="collapse navbar-collapse sidebar-menu" id="bs-example-navbar-collapse-2">
        <ul class="nav nav-pills nav-stacked">
            <li><p class="title-menu">ALL DEPARTMENT</p></li>
            @foreach($category as $category)
            @if(count($category->subCategories)>0)
            <li class="bg-menu"><a href="">{{ $category->name }}</a>
                <ul class="nav nav-pills nav-stacked sub-menu col-md-12">
                        @foreach($category->subCategories as $sub)
                    <li class="bg-menu"><a href="subcategory/{{ $sub->id }}/{{ str_slug($sub->name,'-') }}.html">{{ $sub->name }} </a></li>
                        @endforeach
                </ul>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>