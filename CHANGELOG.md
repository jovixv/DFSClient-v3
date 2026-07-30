# Changelog

This file documents **Deprecated** and **Removed** changes only. New features, fixes, and other updates are not listed here.

## [1.3.0] - 2027-01-20

Scheduled release. Entity classes for SERP elements removed from the DataForSeo API will be deleted from the client.

### Removed

- Entity classes for the following SERP item types (Google no longer returns them):
  - `google_posts`
  - `mention_carousel`
  - `podcasts`
  - `visual_stories`
  - `found_on_web`
  - `explore_brands`
  - `courses`

### Deprecated

- The following fields remain in the client but always return `null`:
  - `related_image_searches` / `related_image_searches_element`
  - `faq` / `faq_box` / `faq_box_element`

- The following boolean fields on `organic` and `paid` SERP items are deprecated and will be deleted in `1.3.0`. Use the `checks` array instead:
  - `is_image`
  - `is_video`
  - `is_featured_snippet`
  - `is_malicious`
  - `is_web_story`
  - `amp_version`

  Affected entity classes:
  - `AdvancedSerpGetResultsByIdEntityMainTasksResultItemsOrganic`
  - `AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPaid`
  - `SettingSerpLiveAdvancedEntityMainTasksResultItemsOrganic`
  - `SettingSerpLiveAdvancedEntityMainTasksResultItemsPaid`

If your code references entity classes for the removed SERP item types (for example `AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_posts`), or reads any of the deprecated boolean fields above, update it before upgrading to `1.3.0`.

## [1.2.18] - 2026-07-30

Previous stable release. See [GitHub releases](https://github.com/jovixv/DFSClient-v3/releases) for earlier history.
