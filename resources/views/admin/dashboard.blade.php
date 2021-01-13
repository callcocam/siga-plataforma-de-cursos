<x-admin-layout>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Dashboard</h2>
      <!-- Cards -->
      <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <x-admin.cards.number>            
         <x-slot name="icon">
           <x-icons.users />
         </x-slot>
         <x-slot name="title">
            Total clients
         </x-slot>
         6389
      </x-admin.cards.number>
      <!-- Card -->
      <x-admin.cards.number color="green">
        <x-slot name="icon">
            <x-icons.account-balence />
          </x-slot>
        <x-slot name="title">
            Account balance
        </x-slot>
        6389
     </x-admin.cards.number>
      <!-- Card -->
      <x-admin.cards.number color="blue">
        <x-slot name="icon">
            <x-icons.sales />
          </x-slot>
        <x-slot name="title">
            New sales
        </x-slot>
        365
     </x-admin.cards.number>
      <!-- Card -->
      <x-admin.cards.number color="teal">
        <x-slot name="icon">
            <x-icons.pending-contacts />
          </x-slot>
        <x-slot name="title">
            Pending contacts
        </x-slot>
        35
     </x-admin.cards.number>
      </div>
</x-admin-layout>