<?php
    $title = 'Communication';
    include("header.php");
    include("inner-banner.php");
?>
<section>
    <div class="container mt-5">
        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.8285385755153!2d28.97094131478401!3d41.02900702609898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9c7a176ea67%3A0x213cab8dd47f5bfc!2zS0FCTE8gU0FOQVnEsEPEsExFUsSwIERFUk5FxJ7EsA!5e0!3m2!1str!2str!4v1576501936571!5m2!1str!2str"
                width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-md-4">
                <h5 class="mb-3">OUR CONTACT INFORMATION</h5>
                <p class="contact_detail"><i class="fa-solid fa-location-dot"></i> Asmali Mescit Mah. General Yazgan
                    Sok. Arzu Han No:15 Floor:6 BEYOĞLU – ISTANBUL</p>
                <p class="contact_detail"><i class="fa-solid fa-phone-volume"></i> 0703000000 </p>
                <p class="contact_detail"><i class="fa-solid fa-envelope"></i> info@camman</p>
            </div>
            <div class="col-md-8">
                <h5 class="mb-3">CONTACT FORM</h5>
                <input type="text" placeholder="Name" class="form-control mb-3">
                <input type="text" placeholder="Phone" class="form-control mb-3">
                <textarea name="" id="" cols="30" rows="10" placeholder="Message" class="form-control mb-3"></textarea>
                <input type="submit" class="btn btn-warning mb-3">
            </div>

        </div>
        <br><br>
    </div>
</section>

<?php
    include("footer.php");
?>