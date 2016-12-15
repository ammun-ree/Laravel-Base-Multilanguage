
<div class="sidebar">
  <div class="menu">
    <ul>
      <a href="{{action('PagesController@GetHomePage')}}"><li>{{trans('pages.homepage')}}</li></a>
      <a href="{{action('PagesController@GetPubliationsPage')}}"><li>{{trans('pages.publications')}}</li></a>
      <a href="{{action('PagesController@GetAboutPage')}}"><li>{{trans('pages.about')}}</li></a>
      <a href="{{action('PagesController@GetContactPage')}}"><li>{{trans('pages.contact')}}</li></a>
    </ul>
  </div>
</div>
