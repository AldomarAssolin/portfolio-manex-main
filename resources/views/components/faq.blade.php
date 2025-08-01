<!-- Faq content -->
<section class="content-faq container">
    <h2 class="text-start mb-5">FAQ</h2>
    <div class="row">
        <div class="col-12" id="accordion">
            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                    <div class="card-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h2 class="card-title w-100">
                                1. Lorem ipsum dolor sit amet
                            </h2>
                        </button>
                    </div>
                </a>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordion">
                    <div class="accordion-body p-2">
                        <strong>This is the first item’s accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-3 text-center">
            <p class="lead">
                <a href="{{ route('contact') }}">Contact us</a>,
                if you found not the right anwser or you have a other question?<br />
            </p>
        </div>
    </div>
</section>
<!-- /.faq content -->