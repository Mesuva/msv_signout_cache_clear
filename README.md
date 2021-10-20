# Sign Out Cache Clear for Concrete CMS

A simple add-on to automatically trigger a cache clear when a member logs out.

This may be useful when a Concrete CMS site has full page caching enabled and you wish to ensure current content is correctly displayed after editing.

- It is only triggered on the sign out action, not when a login times out.
- The cache clear is triggered for _all_ members logging out, so this is really only appropriate for sites where there are only editors and admin 
