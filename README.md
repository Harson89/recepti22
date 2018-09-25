# recepti22
Recepti za hranu

RECEPTI

Za sta sluzi moj web site:

Moj web site sluzi za dodavanje,pregledanje,editovanje recepata.

Kako funkcionise web site:

WebSite funkcionise na sljedeci nacin:
Kada tek pristupimo stranici imamo dvije opcije a to su register ili login(ako smo vec registrirani).Kada se registrujete dobijate user type 0 i direktno ste preusmjereni na pocetnu stranicu web sajta.Ako user posjeduje user_tipe 0 onda je on obicni user odnosno gost i ima sljedece opcije:
-Pretrazivanje recepata po kategorijama
-Moze citati o nama fajl 
-I moze sherovati na facebooku sadrzaj
-I ima mogucnost odjave

U slucaju da se user posjeduje tip 1,taj user je onda admin.I on moze ici na sljedece strane:
-Dodavanje novih recepata sa slikama
-Moze ici na svoju stranu 
-Brisati svoje recepte
-Uređivati svoje recepte 
-O nama 
-Vracanje na pocetni page
-I ima opciju odjave

Kada user tipa 1 ide na dodavanje novog recepta otvori mu se forma u kojoj moze dodati naziv recepta,sliku recepta,i pripremu.Dok se ime i prezime autora automatski spremi prema trenutno prijavljenom USERU.
Kada user tipa 1 ide na svoj profil ispisu mu se svi recepti koji su u njegovom posjedu i za svaki ima mogucnost edit i brisanje.Kada ide na opciju brisanje poziva se php file koji brise taj recept iz baze.Kada user ide na opciju edit recepta onda mu se otvori nova forma u kojoj se automatski ispise vec postojeci naziv i priprema.Kada user submituje promejn onda se u bazi promjene podaci od tom receptu.
Kada user ide na fajl o nama onda mu se ispisu svi podaci koje sam ranije unijeo o stranici(simple) 
I kada user ide na odjavu odjavi sesije i trenutno pirjavljeog usera...tacnije pripremi sajt za upotrebu drugom useru.

Po kliku na kategorije(kod oba tipa usera) Onda mu se ispisu kategorije koje su unsene u bazu i klikom na jednu od njih se preusmjerava na odvojene php fajlove gdje ispisuje sve recepte iz te kategorije.


![slika baze](https://user-images.githubusercontent.com/37156656/46005557-c9ad6e00-c0b5-11e8-9bf9-97c2b839576e.png)
