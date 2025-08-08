<!-- Refer & Earn Modal -->
<div class="modal fade" id="referAndEarn" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-refer-and-earn">
    <div class="modal-content">
      <div class="modal-body pt-4 pt-md-0 px-0 pb-md-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Refer & Earn</h4>
          <p class="text-center mb-12">Invite your friend to {{ config('variables.templateName') }}, if they sign up, you and your friend will get 30 days free trial.</p>
        </div>
        <div class="row py-2">
          <div class="col-12 col-lg-4 px-6">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class="icon-base ri ri-send-plane-2-line icon-40px"></i>
              </div>
            </div>
            <div class="text-center">
              <h6 class="mb-2">Send Invitation 🤟🏻</h6>
              <p class="mb-lg-0">Send your referral link to your friend</p>
            </div>
          </div>
          <div class="col-12 col-lg-4 px-6">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class="icon-base ri ri-pages-line icon-40px"></i>
              </div>
            </div>
            <div class="text-center">
              <h6 class="mb-2">Registration 👩🏻‍💻</h6>
              <p class="mb-lg-0">Let them register to our services</p>
            </div>
          </div>
          <div class="col-12 col-lg-4 px-6">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class="icon-base ri ri-gift-line icon-40px"></i>
              </div>
            </div>
            <div class="text-center">
              <h6 class="mb-2">Free Trial 🎉</h6>
              <p class="mb-0">Your friend will get 30 days free trial</p>
            </div>
          </div>
        </div>
        <hr class="my-6 mx-n3 mx-md-n5" />
        <h5 class="mb-5">Invite your friends</h5>
        <form class="row g-4" onsubmit="return false">
          <div class="col-lg-10">
            <label class="mb-2" for="modalRnFEmail">Enter your friend’s email address and invite them to join {{ config('variables.templateName') }} 😍</label>
            <input type="text" id="modalRnFEmail" class="form-control form-control-sm" placeholder="example@domain.com" aria-label="example@domain.com" />
          </div>
          <div class="col-lg-2 d-flex align-items-end">
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <h5 class="mt-6 mb-5">Share the referral link</h5>
        <form class="row g-4" onsubmit="return false">
          <div class="col-lg-9">
            <label class="mb-2" for="modalRnFLink">You can also copy and send it or share it on your social media. 🥳</label>
            <div class="input-group input-group-sm input-group-merge">
              <input type="text" id="modalRnFLink" class="form-control pe-4" value="{{ config('variables.creatorUrl') }}" />
              <span class="input-group-text text-primary cursor-pointer text-capitalize" id="basic-addon33">Copy link</span>
            </div>
          </div>
          <div class="col-lg-3 d-flex align-items-end">
            <div class="btn-social">
              <button type="button" class="btn btn-icon btn-facebook me-1"><i class="icon-base ri ri-facebook-circle-line icon-22px"></i></button>
              <button type="button" class="btn btn-icon btn-twitter me-1"><i class="icon-base ri ri-twitter-line icon-22px"></i></button>
              <button type="button" class="btn btn-icon btn-linkedin"><i class="icon-base ri ri-linkedin-line icon-22px"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Refer & Earn Modal -->