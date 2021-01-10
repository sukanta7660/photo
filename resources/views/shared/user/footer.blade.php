<footer class="footer-area pt-100 pb-50">
    <div class="container">
        <div class="row footer-info">
            <div class="col-md-4">
                <div class="single-footer">
                    <h4 style="padding-left: 0;">Photographs</h4>
                    <p class="text-justify">Photographs is one of the leading service provider for event management, brand promotion / BTL activities, MICE (exhibitions and international conferences), public relations (PR), photography and video production.</p>
                
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-footer">
                    <h4>USEFUL LINKS</h4>
                    <ul>
                        <li><a href="{{action('User\PackageController@cine_package')}}">Cinematography</a></li>
                        <hr>
                        <li><a href="{{action('User\PackageController@photo_package')}}">Photography</a></li>
                        <hr>
                        <li><a href="{{action('User\PhotographerController@index')}}">Team</a></li>
                        <hr>
                       
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-footer">
                    <h4>SYLHET OFFICE</h4>
                    <ul>
                        <li>52 Hazaribagh</li>
                        <hr>
                        <li>Shahi Eidgah</li>
                        <hr>
                        <li>Sylhet.</li>
                        <hr>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="row footer-text">
            <div class="col-sm-12">
                <p>&copy {{date('Y')}} All rights reserved. Photographs (BD) Limited.</p>
            </div>
        </div>
    </div>
</footer>