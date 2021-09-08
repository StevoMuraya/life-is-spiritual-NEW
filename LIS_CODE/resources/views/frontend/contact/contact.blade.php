    <section class="contact-body">
        <div class="breadcrums">
          <div class="bread-links">
            <a href="index.html" class="bread-link">Home</a>
            <i class="fas fa-chevron-right"></i>
            <a class="bread-active">Contact us</a>
          </div>
        </div>
        <div class="line-sep"></div>
        <p class="contact-message">
          Fill out the form below and we will make sure to get back to you soonest
          possible
        </p>
        <div class="contact-form">
          <form action="{{ route('contact.store') }}" method="post" class="form-action">
            @csrf
            <div class="input-holder">
              <label for="name">Full name</label>
              <input
                type="text"
                autocomplete="none"
                name="name"
                class="input-space"
                placeholder="Full name"
              />
            </div>
            <div class="split-holder">
              <div class="input-holder">
                <label for="email">Email</label>
                <input
                  type="email"
                  name="email"
                  autocomplete="none"
                  id="email"
                  class="input-space"
                  placeholder="Email"
                />
              </div>
              <div class="input-holder">
                <label for="phone">Phone number</label>
                <input
                  type="tel"
                  autocomplete="none"
                  name="phone"
                  class="input-space"
                  placeholder="Phone Number"
                  id="phone"
                />
              </div>
            </div>
            <div class="input-holder">
              <label for="message">Message</label>
  
              <textarea
                class="input-area"
                autocomplete="none"
                name="message"
                placeholder="Type in your message here..."
                id="message"
                rows="8"
              ></textarea>
            </div>
            <div class="button-holder">
              <button class="btn submit">Send</button>
            </div>
          </form>
        </div>
      </section>