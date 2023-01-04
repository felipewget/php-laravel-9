> use Illuminate\Support\Facades\DB;
> use App\Models\Contact
> DB::table('contacts')->paginate()
= Illuminate\Pagination\LengthAwarePaginator {#4571
    +onEachSide: 3,
  }

> Contact::paginate(10)
= Illuminate\Pagination\LengthAwarePaginator {#4572
    +onEachSide: 3,
  }


----------------------

> $contacts = Contact::paginate(3)
= Illuminate\Pagination\LengthAwarePaginator {#4567
    +onEachSide: 3,
  }

// Total records
> $contacts->total()
= 8

// Count records in current page
> $contacts->count()
= 3

// List items
> $contacts->items()
= [
    App\Models\Contact {#4573
      id: 13,
      first_name: "Dolores",
      last_name: "Rowe",
      phone: "+1-772-367-0430",
      email: "hessel.alana@yahoo.com",
      address: """
        444 Lebsack Vista\n
        Lake Yolandafort, RI 29461
        """,
      company_id: 23,
      created_at: null,
      updated_at: null,
    },
    App\Models\Contact {#4556
      id: 14,
      first_name: "Felicity",
      last_name: "O'Connell",
      phone: "(585) 507-7415",
      email: "marilyne25@boyle.net",
      address: """
        83331 Herman Harbors Suite 440\n
        Karsonstad, OH 14707-6074
        """,
      company_id: 23,
      created_at: null,
      updated_at: null,
    },
    App\Models\Contact {#4552
      id: 15,
      first_name: "Carley",
      last_name: "Fritsch",
      phone: "+1-864-265-2745",
      email: "ehand@yahoo.com",
      address: """
        2347 Della Squares\n
        West Roxanehaven, SC 40513-1781
        """,
      company_id: 23,
      created_at: null,
      updated_at: null,
    },
  ]

  // get links

  > $contacts->links()
= Illuminate\View\View {#4566}

> $contacts->links()->render() // html

// All data in JSON
> $contacts->toJson()


page 1 is 1, page 2 is 4...
$contacts->firstItem()

Contact::simplePaginate()