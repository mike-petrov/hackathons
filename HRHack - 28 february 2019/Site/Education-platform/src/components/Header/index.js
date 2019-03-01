import React from 'react'

import './style.css'

function Header() {
	return (
		<div className="has-background-white">
			<div className="navbar has-shadow container" id="header">
				<div className="navbar-brand">
					<a className="navbar-item" href="/">
						Tensegrity
					</a>
				</div>
				<div className="navbar-menu">
					<div className="navbar-start">
						<a className="navbar-item" href="#">
							 Список курсов
						</a>
					</div>
					<div className="navbar-end">
						<a className="navbar-item" href="#">
							Войти
						</a>
					</div>
				</div>
			</div>
		</div>
	)
}

export default Header