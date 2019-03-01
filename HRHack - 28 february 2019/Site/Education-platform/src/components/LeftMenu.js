import React from 'react'

export default function LeftMenu(props) {
	const {category} = props
	
	return (
		<div className="navbar column is-paddingless">
			<div className="navbar-item" onClick={ () => category('economics') } style={ {cursor: 'pointer'} }>
				Экономика
			</div>
			<div className="navbar-item" onClick={ () => category('programming') } style={ {cursor: 'pointer'} }>
				Программирование
			</div>
			<div className="navbar-item" onClick={ () => category('hacks') } style={ {cursor: 'pointer'} }>
				Хакатоны
			</div>
		</div>
	)
}