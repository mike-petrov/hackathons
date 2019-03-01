import React from 'react'


function intersection(A, B)
{
	var m = A.length, n = B.length, c = 0, C = [];
	for (var i = 0; i < m; i++)
	{ 
		var j = 0, k = 0;
		while (B[j] !== A[ i ] && j < n) j++;
		while (C[k] !== A[ i ] && k < c) k++;
		if (j != n && k == c) C[c++] = A[ i ];
	}
	return C;
}

class Card extends React.Component {
	constructor (props) {
        	super(props);
	}

	// (this.props.skills & this.props.skill)
	// !Array.from(this.props.skills).length || false
	// false | Array.from(intersection(this.props.skills, skills).length)

	// !Array.from(this.props.skills).length === true

	// (((!this.props.search.length || (this.props.surname.toLowerCase() + ' ' + this.props.name.toLowerCase()).indexOf(this.props.search) !== -1) && (!Array.from(this.props.skills).length || intersection(Array.from(this.props.skills), skills).length)) == 0)

	render() {
		let skills = this.props.skill.toLowerCase().split(', ')
		// console.log(this.props.skills, skills, false || intersection(Array.from(this.props.skills), skills).length)
		let cond_1 = this.props.search.length
		let cond_2 = (this.props.surname.toLowerCase() + ' ' + this.props.name.toLowerCase()).indexOf(this.props.search) != -1
		let cond_3 = Array.from(this.props.skills).length
		let cond_4 = intersection(Array.from(this.props.skills), skills).length

		let var_1 = !cond_1 && !cond_3
		let var_2 = !cond_1 && cond_3 && cond_4
		let var_3 = cond_1 && !cond_3 && cond_2
		let var_4 = cond_1 && cond_3 && cond_2 && cond_4

		// console.log('-----')
		// console.log('петров'.indexOf('петров'))
		// console.log(cond_1, cond_2, cond_3, cond_4)
		// console.log(var_1, var_2, var_3, var_4)
		// console.log(this.props.surname.toLowerCase() + ' ' + this.props.name.toLowerCase(), '|', this.props.search, '|',this.props.surname.toLowerCase() + ' ' + this.props.name.toLowerCase().indexOf(this.props.search) == -1)

		let varr = var_1 || var_2 || var_3 || var_4

        	return (
			<div>
			{ this.props.re }
			{
				varr != 0 &&  
				<a onClick={() => { this.props.onUpdatePanel('UserProfile',this.props.id)}} className="card">
					<img src={this.props.image} className="card-image"/>
					<div className="card-info">
						<div className="card-name">{this.props.name + ' ' + this.props.surname}</div>
					</div>
				</a>
			}
			</div>
		)
	}
}


export default Card;
