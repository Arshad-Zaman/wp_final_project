Ignore the Login, Signup, and Logout tabs in the navigation bar as those are set to redirect to the actual .php files.

This is an HTML demo styled with CSS to show off the overall design and styling of the index and dashboard pages. Some JavaScript is used for part of the Index page, but otherwise, all CSS styling can be found in the styling folder.

If your branch is based off the main branch (or you want to commit to the main branch), you will need to update all the .php files accordingly. I originally left the .php files be and resorted to making new .html templates to prevent accidentally messing with the backend code, though at the time of this writing, I am having trouble connecting to the CODD server to do further testing.

(I reached out to our instructor, the TAs, and submitted a ticket to the CS department in case the issue still persists for me or if anything else goes wrong.)

I also did my best to comment as much as I could in each file.

- index -> Login or Signup [INDEX.PHP IN MAIN BRANCH ALREADY STYLED ACCORDINGLY]
- seller-dashboard -> Navbar (About, Dashboard (Seller), Logout) -> any created cards -> add new card (add_card.html)
- add_card -> Navbar -> Form to add new property listing -> Cancel (bottom of the form)
- display-card-seller -> Has Edit/Delete Buttons -> Return to seller-dashboard
- buyer-dashboard -> Navbar (About, Dashboard (Buyer), Wishlist, Logout) -> Return to buyer-dashboard
- buyer-wishlist -> Navbar (About, Dashboard (Buyer, Wishlist, Logout) -> Cards Displayed (based on user's wishlist)
- display-card-buyer -> Has Wishlist Button -> Return to buyer-dashboard
- admin-dashboard -> Navbar (About, Logout) -> Multiple Cards showing statistics/data
