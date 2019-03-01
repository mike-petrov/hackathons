import React from 'react'

export default function Footer() {
	return (
		<div className="footer container" style={ {backgroundColor: '#f2f0f1'} }>
			<div className="columns">
				<div className="column is-3">
				Колонка 1
				</div>

				<div className="column is-3">
				Колонка 2
				</div>

				<div className="column is-6">
				Колонка 3
				</div>
			</div>
		</div>
	)
}