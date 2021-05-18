<div>
    <form class="c-form" method="POST" action="">
        <div id="c-form-grp-1" class="c-form-grp">
            <fieldset class="c-form-field">
                <label for="c-f-input-1" class="c-form-input-lbl"><?= __("Fullname") ?></label>
                <input id="c-f-input-1" class="c-form-input" type='text' />
            </fieldset>
            <fieldset class="c-form-field">
                <label for="c-f-input-2" class="c-form-input-lbl"><?= __("Email") ?></label>
                <input id="c-f-input-2" class="c-form-input" type='text' />
            </fieldset>
            <fieldset class="c-form-field">
                <label for="c-f-input-3" class="c-form-input-lbl"><?= __("Subject") ?></label>
                <select id="c-f-input-3" class="c-form-input">
                    <option></option>
                    <option><?= __("Request a quote for a website") ?></option>
                    <option><?= __("Availability request") ?></option>
                </select>
            </fieldset>
            <div>
                <span><?= __("Add Message") ?></span>
                <button>-></button>
            </div>
        </div>
        <div id="c-form-grp-1" style="display: none">
            <fieldset>
                <textarea placeholder='Place Your Message Here'>
                Place Your Message Here
            </textarea>
            </fieldset>
        </div>
    </form>
</div>