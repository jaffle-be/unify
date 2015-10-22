@if($success)
    <form method="post" id="sky-form3"
          class="sky-form contact-style">
        <p class="text-center" style="padding-top: 25px;">
            <i style="font-size:5em; color: #72c02c;" class="rounded-x icon icon-check"></i>
        </p>
    </form>
@else
    <form action="{{ store_route('store.contact.store') }}" method="post"
          id="sky-form3" class="sky-form sky-changes-3">

        {!! csrf_field() !!}
        <input name="_id" type="hidden" value="{{ $contact->id }}"/>

        <fieldset>
            <div class="row">
                <section class="col col-6">
                    <label class="label">Name</label>
                    <label class="input">
                        <i class="icon-append fa fa-user"></i>
                        <input type="text" name="name" id="name">
                    </label>
                </section>
                <section class="col col-6">
                    <label class="label">E-mail</label>
                    <label class="input">
                        <i class="icon-append fa fa-envelope-o"></i>
                        <input type="email" name="email" id="email">
                    </label>
                </section>
            </div>

            <section>
                <label class="label">Subject</label>
                <label class="input">
                    <i class="icon-append fa fa-tag"></i>
                    <input type="text" name="subject" id="subject">
                </label>
            </section>

            <section>
                <label class="label">Message</label>
                <label class="textarea">
                    <i class="icon-append fa fa-comment"></i>
                    <textarea rows="4" name="message" id="message"></textarea>
                </label>
            </section>

            <section>
                <label class="label">Enter characters below:</label>
                <label class="input input-captcha">
                    <img src="{{ captcha_src() }}"
                         width="120" height="32" alt="Captcha image"/>
                    <input type="text" maxlength="6" name="captcha" id="captcha">
                </label>

                @if($errors->has('captcha'))
                    <label class="error">{{ $errors->first('captcha') }}</label>
                @endif
            </section>

            <section>
                <label class="checkbox"><input type="checkbox" name="copy"><i></i>Send a copy to my
                    e-mail
                    address</label>
            </section>
        </fieldset>

        <footer>
            <button type="submit" class="btn-u">Send message</button>
        </footer>
    </form>
@endif