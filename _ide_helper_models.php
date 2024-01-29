<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Classe
 *
 * @property int $id
 * @property string $nom_formation
 * @property int $duree_formation
 * @property float $prix
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Classe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereDureeFormation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereNomFormation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereUpdatedAt($value)
 */
	class Classe extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Etudiant
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property int $age
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Etudiant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Etudiant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Etudiant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Etudiant whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etudiant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etudiant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etudiant whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etudiant wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Etudiant whereUpdatedAt($value)
 */
	class Etudiant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Prof
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Prof newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prof newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prof query()
 */
	class Prof extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

