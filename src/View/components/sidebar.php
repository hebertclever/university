<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body>
    <div id="sidebar" class="h-screen bg-white rounded-lg m-12 shadow-lg lg:w-64 w-28">
        <div class="px-6 pt-8">
            <div class="flex items-center justify-center">                
                <a id="toggleArrow" class="lg:hidden inline-flex"><img src="/assets/menu-02.svg" alt="menu icon" class="w-6"></a>
            </div>
            <div class="flex sm:justify-start mt-6">
                <a href="#"><img class="w-28 lg:w-auto" src="/assets/logo.svg" alt="Logo Website"></a>
            </div>
            <div class="flex-col justify-center">
                <div class="flex flex-col items-center sm:items-start mt-6">
                    
                    <!-- Admin options -->
                    <a class="flex items-center mt-2 text-lg text-icon-1 font-semibold justify-center sm:justify-start">
                        <img class="w-10" src="/assets/access.svg" alt="Logo Icon">
                        <p class="ml-2 lg:inline hidden">Access</p>
                    </a>
                    <a class="flex items-center mt-2 text-lg text-icon-1 font-semibold justify-center sm:justify-start">
                        <img class="w-10" src="/assets/teacher.svg" alt="Logo Icon">
                        <p class="ml-2 lg:inline hidden">Teachers</p>
                    </a>
                    <a class="flex items-center mt-2 text-lg text-icon-1 font-semibold justify-center sm:justify-start">
                        <img class="w-10" src="/assets/studentes-graduation.svg" alt="Logo Icon">
                        <p class="ml-2 lg:inline hidden">Students</p>
                    </a>
                    <a class="flex items-center mt-2 text-lg text-icon-1 font-semibold justify-center md:justify-start">
                        <img class="w-10" src="/assets/blackboard.svg" alt="Logo Icon">
                        <p class="ml-2 lg:inline hidden">Classes</p>
                    </a>

                    <!-- Student options -->
                    <a class="flex items-center mt-2 text-lg text-icon-1 font-semibold justify-center md:justify-start">
                        <img class="w-10" src="/assets/certificate.svg" alt="Logo Icon">
                        <p class="ml-2 lg:inline hidden">View Grades</p>
                    </a>
                    <a class="flex items-center mt-2 text-lg text-icon-1 font-semibold justify-center md:justify-start">
                        <img class="w-10" src="/assets/manage-education.svg" alt="Logo Icon">
                        <p class="ml-2 lg:inline hidden">Manage Your Classes</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleArrow = document.getElementById('toggleArrow');
        toggleArrow.addEventListener('click', function() {
            if (sidebar.classList.contains('w-28')) {
                sidebar.classList.remove('w-28');
                sidebar.classList.add('w-64');
                document.querySelectorAll('.ml-2').forEach(el => {
                    el.classList.remove('hidden');
                    el.classList.add('inline');
                });
            } else {
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-28');
                document.querySelectorAll('.ml-2').forEach(el => {
                    el.classList.remove('inline');
                    el.classList.add('hidden');
                });
            }
        });
    </script>
</body>

</html>
