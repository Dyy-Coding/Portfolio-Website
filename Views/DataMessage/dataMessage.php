<style>
    #data {
        margin-top: 100px;
    }
</style>

<!-- Tailwind CSS contact submissions section -->
<section class="min-h-screen py-16 px-6 md:px-16 bg-gray-50 text-gray-800">

  <div class="max-w-6xl mx-auto flex flex-col md:flex-col items-center gap-12" id="data">
    <div style="height: 50px;">
      <h2 class="text-3xl font-extrabold mb-4 text-blue-900">Contact Submissions</h2>
    </div>  
    <div class="w-full flex justify-end">
        <a href="/Logout" 
          class="mb-4 px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded hover:bg-blue-800 transition">
          Logout
        </a>
      </div>
        
    <?php if ($contacts): ?>
    <table class="w-full border-separate border-spacing-y-2 shadow-md bg-white rounded-lg overflow-hidden">
      <thead>
        <tr class="bg-blue-900 text-white font-semibold">
          <th class="text-left px-4 py-3 rounded-tl-lg">#</th>
          <th class="text-left px-4 py-3">Name</th>
          <th class="text-left px-4 py-3">Email</th>
          <th class="text-left px-4 py-3">Message</th>
          <th class="text-left px-4 py-3">Timestamp</th>
          <th class="text-left px-4 py-3 rounded-tr-lg">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($contacts as $contact): ?>
        <tr class="bg-gray-100 hover:bg-blue-100 transition-colors duration-300">
          <td class="px-4 py-3"><?= $contact['id'] ?></td>
          <td class="px-4 py-3"><?= htmlspecialchars($contact['name']) ?></td>
          <td class="px-4 py-3"><?= htmlspecialchars($contact['email']) ?></td>
          <td class="px-4 py-3"><?= htmlspecialchars($contact['message']) ?></td>
          <td class="px-4 py-3"><?= $contact['timestamp'] ?></td>
          <td class="px-4 py-3 whitespace-nowrap space-x-2">

            <!-- Delete button using JS fetch -->
            <form onsubmit="return deleteContact(event, <?= $contact['id'] ?>)" class="inline-block">
              <button type="submit" 
                class="inline-flex items-center gap-1 px-3 py-1 text-sm font-semibold rounded-md bg-red-500 text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-600"
                title="Delete Contact" aria-label="Delete contact <?= htmlspecialchars($contact['name']) ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm5 0A.5.5 0 0 1 11 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5z"/>
                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1h-11a1 1 0 0 1-1-1V2h13v1zM4.118 4L4 14.5A1.5 1.5 0 0 0 5.5 16h5a1.5 1.5 0 0 0 1.5-1.5L11.882 4H4.118z"/>
                </svg>
                Delete
              </button>
            </form>

          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <?php else: ?>
      <p class="mt-6 text-center text-gray-500 italic text-lg">No contacts found.</p>
    <?php endif; ?>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Fade-in observer (your existing code)
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('fade-in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-on-scroll').forEach(el => observer.observe(el));

    // SweetAlert success popup on deletion
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('deleted') === '1') {
      Swal.fire({
        icon: 'success',
        title: 'Deleted!',
        text: 'Contact has been deleted successfully.',
        timer: 2000,
        timerProgressBar: true,
        showConfirmButton: false
      }).then(() => {
        // Remove query param without reloading
        window.history.replaceState({}, document.title, window.location.pathname);
      });
    }
  });

  // Delete function using Fetch (your existing code)
  function deleteContact(event, id) {
    event.preventDefault();
    if (!confirm("Delete this contact?")) return false;

    fetch(`/deleteSubmission/${id}`, {
      method: 'DELETE'
    })
    .then(res => {
      if (res.ok) {
        window.location.href = '/DataSubmission?deleted=1'; // Redirect triggers SweetAlert above
      } else {
        alert("❌ Failed to delete contact.");
      }
    });

    return false;
  }
</script>
