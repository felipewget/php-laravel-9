https://laravel.com/docs/9.x/eloquent-relationships

One To One
One To Many
One To Many (Inverse) / Belongs To
Has One Of Many
Has One Through
Has Many Through

We have table structure with foreign key


One To Many
-> One company to many contacts

Go com company model

we weill put "contacts" in plural indicating what will be many



class Company extends Model
{

    public function contacts()
    {
        // contact::class, and foreign key is company_id but we an put company_id 
        // in the second argument, I'm using company_id, so will be foreign_key in this table
        // we need connect with the other model
        return $this->hasMany(Contact::class, "company_id");
    }

}



class Contact extends Model
{
    use HasFactory;

    public function company(){
        // In singular because will return only one record by user
        // Eloquent can get the keyname for foreign key
        return $this->belongsTo(Company::class); // but in this case, I can't put , "id" bcause the forign key is with contct to company
    }
}


> Company::first()->contacts()
= Illuminate\Database\Eloquent\Relations\HasMany {#4558}

> Contact::first()->company()
= Illuminate\Database\Eloquent\Relations\BelongsTo {#4573}


$comp->contacts()->get()   
$comp->contacts()->where('email', 'like', '%.com%')->get()   


// I can see all contacts vinculated
$comp->contacts


and the inversse , with contact talbe is posible as wel

$contact = Contact::first()  
$contact->company
$contact->company->name
$contact->company->first();

use App\Models\Company;
use App\Models\Contact;

$contact = Contact::first();
$contact->company;

> $contact->company;
= App\Models\Company {#4565
    id: 23,
    name: "Kozey-Littel",
    address: """
      4985 Brett Way\n
      Alejandrafort, MO 79525-5266
      """,
    website: "gleichner.org",
    email: "ygibson@yahoo.com",
    created_at: "2023-01-04 16:40:14",
    updated_at: null,
  }

> $contact->company->name;
= "Kozey-Littel"



---------------------------------

We can modify relathionship updating, dleting and other

> $company->contacts->count()
= 10

> $company->contacts->first()
= App\Models\Contact {#4577
    id: 11,
    first_name: "Sigurd",
    last_name: "Collins",
    phone: "(918) 347-8205",
    email: "hcartwright@bergstrom.com",
    address: """
      399 Addie Way Apt. 642\n
      Rudolphberg, HI 62712-2359
      """,
    company_id: 23,
    created_at: null,
    updated_at: null,
  }

> $company->contacts->first()->delete()
= true

> $company->contacts->count()
= 10

> $company->contacts->first()
= App\Models\Contact {#4577
id: 11,
first_name: "Sigurd",
last_name: "Collins",
phone: "(918) 347-8205",
email: "hcartwright@bergstrom.com",
address: """
    399 Addie Way Apt. 642\n
    Rudolphberg, HI 62712-2359
    """,
company_id: 23,
created_at: null,
updated_at: null,
}

but the changes will be applied only when you reload the relationship

$company->load('contacts')

eg:

> $company->contacts->count()
= 9

> $company->contacts->first()->delete()
= true

> $company->contacts->count()
= 9

$company->load('contacts')

> $company->contacts->count()
= 8