<!--
Settings
Main Page
-->
<div class="app-page" data-page="settingsPage">
    <div class="app-topbar">
        <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Settings</div>
    </div>
    <div class="app-content">
        <div class="app-section">
            <h5 style="text-align:center">Linked Accounts</h5>
            <hr>
            <div class="app-button" data-target="">Facebook</div>
            <div class="app-button" data-target="">Twitter</div>
            <div class="app-button" data-target="">PayPal</div>
            <div class="app-button" data-target="">Venmo</div>
        </div>
        <div class="app-section">
            <h5 style="text-align:center">Payment Info</h5>
            <hr>
            <div class="app-button" data-target="">Credit Cards</div>
            <div class="app-button" data-target="settingsPaypal">Paypal E-mail</div>
        </div>
        <div class="app-section">
            <h5 style="text-align:center">Account</h5>
            <hr>
            <div class="app-button" data-target="settingsPrivacy">Privacy</div>
            <div class="app-button" data-target="settingsCancel">Cancel Events</div>
            <div class="app-button" data-target="settingsSharing">Sharing</div>
            <div class="app-button" data-target="settingsNotifications">Notifications</div>
            <div class="app-button" data-target="settingsHelp">Help</div>
            <div class="app-button" data-target="home">Log out</div>
            <div class="app-button" data-target="termsAgreement">Terms</div>
        </div>
    </div>
</div>

<!--
Settings
PayPal Email Subpage
-->
<div class="app-page" data-page="settingsPaypal">
    <div class="app-topbar">
        <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Settings</div>
    </div>
    <div class="app-content">
        <div class="app-section">
            <h5 style="text-align:center">Set your paypal email</h5>
            <hr>
            <form>
                <input type="text" id="paypalInput" placeholder="Email"/>
                <div class="app-button" id="paypalInputSubmit">Submit</div>
            </form>
        </div>
    </div>
</div>

<!--
Settings
Privacy Subpage
-->
<div class="app-page" data-page="settingsPrivacy">
    <div class="app-topbar">
        <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Settings</div>
    </div>
    <div class="app-content">
        <div class="app-section">
            <h5 style="text-align:center">Privacy</h5>
            <hr>
            <form>
                <ul class="app-list">
                    <li style="font-size:0.75em;">Everyone can see the events I'm attending<input type="radio" name="privacy" value="" style="float:right;"></li>
                    <li style="font-size:0.75em;">Only FB Friends can see the events I'm attending<input type="radio" name="privacy" value="" style="float:right;"></li>
                    <li style="font-size:0.75em;">No one can see the events I'm attending<input type="radio" name="privacy" value="" style="float:right;"></li>
                </ul>
            </form>
        </div>
    </div>
</div>

<!--
Settings
Sharing Subpage
-->
<div class="app-page" data-page="settingsSharing">
    <div class="app-topbar">
        <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Settings</div>
    </div>
    <div class="app-content">
        <div class="app-section">
            <h5 style="text-align:center">Facebook</h5>
            <hr>
            <ul class="app-list">
                <li>Share events that you're hosting<input type="checkbox" name="sharingFB" value="yesHosting" style="float:right;"></li>
                <li>Share events that you're attending<input type="checkbox" name="sharingFB" value="yesAttending" style="float:right;"></li>
            </ul>
        </div>
        <div class="app-section">
            <h5 style="text-align:center">Twitter</h5>
            <hr>
            <ul class="app-list">
                <li>Share events that you're hosting<input type="checkbox" name="sharingTwitter" value="yesHosting" style="float:right;"></li>
                <li>Share events that you're attending<input type="checkbox" name="sharingTwitter" value="yesAttending" style="float:right;"></li>
            </ul>
        </div>
    </div>
</div>

<!--
Settings
Notifications Subpage
-->
<div class="app-page" data-page="settingsNotifications">
    <div class="app-topbar">
        <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Settings</div>
    </div>
    <div class="app-content">
        <div class="app-section">
            <h5 style="text-align:center">Notifications</h5>
            <hr>
            <form>
                <ul class="app-list">
                    <li>New Popular Event<input type="checkbox" name="notification" value="" style="float:right;"></li>
                    <li>Event Reminder<input type="checkbox" name="notification" value="" style="float:right;"></li>
                    <li>Rate Event Reminder<input type="checkbox" name="notification" value="" style="float:right;"></li>
                    <li>Event Address Notification<input type="checkbox" name="notification" value="" style="float:right;"></li>
                    <li>Acceptance/Rejection to Event<input type="checkbox" name="notification" value="" style="float:right;"></li>
                    <li>Event Changes<input type="checkbox" name="notification" value="" style="float:right;"></li>
                    <li>Permission Requests For Your Events<input type="checkbox" name="notification" value="" style="float:right;"></li>
                    <li>Received Event Invitations<input type="checkbox" name="notification" value="" style="float:right;"></li>
                    <li>New People Going to My Event<input type="checkbox" name="notification" value="" style="float:right;"></li>
                </ul>
            </form>
        </div>
    </div>
</div>

<!--
Settings
Cancel Subpage
-->
<div class="app-page" data-page="settingsCancel">
    <div class="app-topbar">
        <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Settings</div>
    </div>
    <div class="app-content">
        <div class="app-section">
            <h5 style="text-align:center">Cancel Events</h5>
            <hr>
            <p id="cancelEventsText">Cancelling an event before a "week's notice" will not allow you to re-create an event right away.
            You'll have to wait one week to create a new event. If you need to change something, we recomment you to "edit" 
            the event through your hosting page.</p>
        </div>
        <div class="app-section">
            <h6 style="text-align:center">Current Events</h6>
            <hr>
            <ul class="app-list">
                <li>Event Title/Date @ Time <span style="float:right;">Edit/Cancel</span></li>
                <li>Event Title/Date @ Time <span style="float:right;">Edit/Cancel</span></li>
                <li>Event Title/Date @ Time <span style="float:right;">Edit/Cancel</span></li>
            </ul>
        </div>
    </div>
</div>

<!--
Settings
Help Subpage
-->
<div class="app-page" data-page="settingsHelp">
    <div class="app-topbar">
        <div class="app-button left" data-back>Back</div>
        <div class="app-title lightGrayTitle blackText">Settings</div>
    </div>
    <div class="app-content">
        <div class="app-section">
            <h5 style="text-align:center">Help</h5>
            <hr>
            <p id="">Under Construction...</p>
        </div>
    </div>
</div>
