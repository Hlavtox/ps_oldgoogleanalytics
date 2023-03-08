
### Information

This is a renamed fork of [ps_googleanalytics 4.1.2](https://github.com/PrestaShop/ps_googleanalytics/tree/v4.1.2). It allows you to keep feeding Universal Analytics with data and transition to Google Analytics 4 smoothly.

When you install it, it:
- Makes it's own database tables oldganalytics and oldganalytics_data.
- Copies all data from ps_googleanalytics.
- Copies all settings from ps_googleanalytics.
- Disables the ps_googleanalytics, so it doesn't measure twice.

Then, make sure ps_googleanalytics is on 4.2.0+, switch it to GA4 with proper key and enable it again.
