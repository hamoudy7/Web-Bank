<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings Page</title>
    <link rel="stylesheet" href="Setting.css" />
  </head>
  <body>
    <div class="container">
      <h1>Settings</h1>
      <div class="tabs">
        <button class="tab-button" onclick="openTab(event, 'profile')">
          Profile Settings
        </button>
        <button class="tab-button" onclick="openTab(event, 'security')">
          Security Settings
        </button>
        <button class="tab-button" onclick="openTab(event, 'notifications')">
          Notification Settings
        </button>
      </div>

      <div id="profile" class="tab-content">
        <h2>Profile Settings</h2>
        <form>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Your name" />
          <label for="email">Email:</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Your email"
          />
          <label for="phone">Phone:</label>
          <input
            type="tel"
            id="phone"
            name="phone"
            placeholder="Your phone number"
          />
          <label for="address">Address:</label>
          <input
            type="text"
            id="address"
            name="address"
            placeholder="Your address"
          />
          <label for="profile-picture">Profile Picture:</label>
          <input type="file" id="profile-picture" name="profile-picture" />

          <button type="submit">Save Changes</button>
        </form>
      </div>

      <div id="security" class="tab-content">
        <h2>Security Settings</h2>
        <form>
          <label for="password">New Password:</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="New password"
          />
          <label for="confirm-password">Confirm Password:</label>
          <input
            type="password"
            id="confirm-password"
            name="confirm-password"
            placeholder="Confirm new password"
          />
          <label for="2fa">Two-Factor Authentication:</label>
          <select id="2fa" name="2fa">
            <option value="enabled">Enabled</option>
            <option value="disabled">Disabled</option>
          </select>
          <button type="submit">Save Changes</button>
        </form>
      </div>

      <div id="notifications" class="tab-content">
        <h2>Notification Settings</h2>
        <form>
          <label for="email-notifications">Email Notifications:</label>
          <input
            type="checkbox"
            id="email-notifications"
            name="email-notifications"
          />
          <label for="sms-notifications">SMS Notifications:</label>
          <input
            type="checkbox"
            id="sms-notifications"
            name="sms-notifications"
          />
          <label for="push-notifications">Push Notifications:</label>
          <input
            type="checkbox"
            id="push-notifications"
            name="push-notifications"
          />
          <button type="submit">Save Changes</button>
        </form>
      </div>
    </div>

    <script src="Setting.js"></script>
  </body>
</html>
