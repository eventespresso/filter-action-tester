# filter-action-tester
This is a utility plugin that we can add filters/actions that help with testing tickets.

## How to use


## Contributing

The beautiful thing about WordPress Filters/Action hooks, is if they don't exist then no fails.  So we can safely use this for testing things that might only be in other branches.  However, to keep the file somewhat organized please use the following example schema in the phpdoc comment blocks:

```
/**
 * {Filter/Action} for testing https://events.codebasehq.com/projects/event-espresso/tickets/{some_ticket_num}
 * This {Filter/Action} tests the blarg bug that causes the code to go blarg, and ensures that it does not go blarg 
 * when you have an invalid blarg in it.
 * Steps to reproduce:
 * 1. Activate this plugin
 * 2. Go to "http://yourdomain.com/some-route-that-causes-blarg-bug
 * 3. There should be no errors.
 **/
 ```
