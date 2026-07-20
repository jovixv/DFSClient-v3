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

If your code references entity classes for the removed SERP item types (for example `AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_posts`), update it before upgrading to `1.3.0`.

## [1.2.17] - 2026-07-20

Previous stable release. See [GitHub releases](https://github.com/jovixv/DFSClient-v3/releases) for earlier history.
